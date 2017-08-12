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

        $newItem = new Page();
        if ($id){
            $newItem = Page::find($id);
        }
        $newItem->title = $request->input("area0");
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
            $docs = $request->input($id);
            if (count($f)) {
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

        return back();
    }

    public function edit($id=null){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $item = new Page();
        $paths = new Path_Page();
        $docs = new Media_Page();
        $menu = Menu::main();
        $parrent_cat = 0;
        if ($id){
            $item = Page::find($id);
            $paths = Path_Page::where("page_id",$id)->get();
            $docs = Media_Page::where("page_id",$id)->get();
            if ($item->cat_id !=0){
                $parrent_cat = Menu::find($item->cat_id)->parrent_id;
            }

        }

        return view('admin.addUniquePage', ['item' => $item, 'menu'=>$menu,'paths'=>$paths, 'docs'=>$docs, 'cat'=>$item->cat_id, "parrent_cat"=>$parrent_cat]);
    }



}
