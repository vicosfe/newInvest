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
class ArticleController extends Controller
{


    public function add(Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $newItem = new Article();
        $newItem->title = $request->input("addNewsCaption");
        $newItem->content = ($request->input("area2"))? $request->input("area2") : "";
        $newItem->published = 1;
        $images = $request->prewImgNews;
        if (count($images)) {
            $firstImg = array_shift($images);
            $pref = rand(1, 10000);
            $name = $pref .$firstImg->getClientOriginalName();
            $firstImg->move(public_path() . '/images/news/', $name);
            $newItem->img = "/public/images/news/" . $name;
            $newItem->save();
            $newMedia = new Media_New();
            $newMedia->img = $newItem->img;
            $newMedia->id_news = $newItem->id;
            $newMedia->published_main = 0;
            $newMedia->save();
            foreach ($images as $f) {
                $pref = rand(1, 10000);
                $name = $pref . $f->getClientOriginalName();
                $f->move(public_path() . '/images/news/', $name);
                $newMedia = new Media_New();
                $newMedia->img = "/public/images/news/" . $name;
                $newMedia->id_news = $newItem->id;
                $newMedia->published_main = 0;
                $newMedia->save();
            }
        }
        else{
            $newItem->img ="/public/images/empty.png";

        }
        return back();
    }

    public function edit($id=null){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $item = new Article();
        $media = new Media_Article();
        $docs = new Media_Articledoc();
        $menu = Menu::main();
        $parrent_cat = 0;
        if ($id){
            $item = Article::getItemOne($id);
            $media = Media_Article::index($id);
            $docs = Media_Articledoc::index($id);
            if ($item->cat_id !=0){
                $parrent_cat = Menu::find($item->cat_id)->parrent_id;
            }
            else {
                $cat = [];
                $right = Menu::main();
            }
        }

        return view('admin.addArticles', ['item' => $item, 'menu'=>$menu,'media'=>$media, 'docs'=>$docs, 'cat'=>$item->cat_id, "parrent_cat"=>$parrent_cat]);
    }



}
