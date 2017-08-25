<?php


namespace App\Http\Controllers\Admin;

use App;
use App\Article;
use App\Menu;
use App\Media_Article;
use App\Media_Articledoc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Media_Page;
use App\Path_Page;
use App\Page;
class PagesController extends Controller
{


   public function add($id = null, Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }


        if ($id){
            $newItem = Page::find($id);
        }
        else{
            $newItem = new Page();
        }

        $newItem->title = $request->input("area0");
       if ($request->input('addPages2')){
           $newItem->cat_id = $request->input('addPages2');
       }
       else{
           $newItem->cat_id = $request->input('addPages1');
       }
        $newItem->save();

        $count = $request->input("count");

        for ($i=1; $i<=$count;$i++){
            $newItemPath = new Path_Page();

            $id = "area".$i;
            $newItemPath ->description = $request->input($id);
            $id = "addArticleCaption".$i;
            $newItemPath->title = $request->input($id);
            $newItemPath->page_id = $newItem->id;
            $newItemPath->save();

            $id = "prewDocsPages".$i;
            $docs = $request->$id;
            if (count($docs)) {
                foreach ($docs as $f) {
                    $pref = rand(1, 10000);
                    $name = $pref . $f->getClientOriginalName();
                    $f->move(public_path() . '/docs/', $name);
                    $newMedia = new Media_Page();
                    $newMedia->link = "/public/docs/" . $name;
                    $newMedia->path_id = $newItemPath->id;
                    $newMedia->title =  $f->getClientOriginalName();
                    $newMedia->save();
                }
            }
        }


           $m = Menu::where("id",$newItem->cat_id)->first();

           $m->link = "/page/".$newItem->id;
           $m->type = 2;
           $m->save();

        return back();
    }

    public function edit($id=null){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $item = new Page();
        $paths = new Path_Page();
        $docs = new Media_Page();
        $menu = Menu::mainType(0,2);
        $parrent_cat = 0;
        if ($id){
            $item = Page::find($id);
            $paths = Path_Page::where("page_id",$id)->get();
            foreach ($paths as $path){
                $path->docs = Media_Page::where("path_id",$id)->get();
            }

            if ($item->cat_id !=0){
                $parrent_cat = (count(Menu::find($item->cat_id)))? Menu::find($item->cat_id)->parrent_id : 0;
            }

        }

        return view('admin.addUniquePage', ['item' => $item, 'menu'=>$menu,'paths'=>$paths, 'cat'=>$item->cat_id, "parrent_cat"=>$parrent_cat]);
    }



    public function change(){
        if (!count(Auth::user())
        ){
            return redirect("/login");
        }
        $items = Page::paginate(20);
        return view('admin.editPa', ['items' => $items]);
    }
    public function removeD($id){
        Media_Page::destroy($id);
        return back();
    }

    public function remove($id){
        $paths = Path_Page::where("page_id",$id)->get();
        foreach ($paths as $path){
            $docs =  Media_Page::where("path_id",$id)->get();
            foreach ($docs as $d){
                $d->delete();
            }
            $path->delete();
        }
        Page::destroy($id);
        return back();
    }
    public function search(Request $request){
        $key = $request->input("search");
        if (strlen($key)<2){
            return back();
        }

        $pages = Page::where("title","LIKE", '%'.$key.'%')->paginate(20);


        return view('admin.editPa', ['items' => $pages , 'search' => $key]);

    }
}
