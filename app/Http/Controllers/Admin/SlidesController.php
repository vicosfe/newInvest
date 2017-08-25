<?php


namespace App\Http\Controllers\Admin;

use App;
use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class SlidesController extends Controller
{

    public function index($id=null){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $items = Slide::where("enable",1)->get();
        $slide = new Slide();
        if ($id){
            $slide = Slide::find($id);
        }
        return view('admin.settingSlide', ['slide'=>$slide, 'items' => $items]);

    }

    public function remove(Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $id = $request->input("slides");
        if ($id){
            Slide::destroy($id);
        }
        return back();

    }

    public function add($id = null, Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }

        $newItem = new Slide();
		if($request->input("id")){
          $id = $request->input("id");
        	$newItem = Slide::find($id);
        	$img = $newItem->img;
        }

        $newItem->title = $request->input("title");
        $newItem->content = $request->input("area");
		
        $images = $request->file;
        if (count($images)) {
            $pref = rand(1, 10000);
            $name = $pref .$images->getClientOriginalName();
            $images->move(public_path() . '/images/', $name);
            $newItem->img = "/public/images/" . $name;
        }
        else{
            if (!$id){
                $newItem->img ="/public/images/empty.png";
            }
            else{
                $newItem->img = $img;
            }

        }
        $newItem->save();

        return back();
    }





}
