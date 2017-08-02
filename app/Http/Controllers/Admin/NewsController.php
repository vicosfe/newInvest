<?php

namespace App\Http\Controllers\Admin;

use App;
use App\News;
use App\Media_New;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{


    public function __construct()
    {

    }

    public function add(Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $newItem = new News();
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
        $itemNew = new News();
        $media = new Media_New();
        if ($id){
            $itemNew = News::getItem($id);
            $media = Media_New::getItemMedia($id);
        }
        return view('admin.add', ['item' => $itemNew, 'media'=>$media]);
    }




}
