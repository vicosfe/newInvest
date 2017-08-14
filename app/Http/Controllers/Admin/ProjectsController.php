<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Project;
use App\Media_Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Menu;
class ProjectsController extends Controller
{


    public function __construct()
    {

    }

    public function add( $id = null,Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $newItem = new Project();
        if ($id){
            $newItem = News::find($id);
        }
        $newItem->title = $request->input("addProjectsCaption");
        $newItem->price = $request->input("addProjectsPrice");

        $count = $request->input("count");
        $desc = [];
        for ($i = 1; $i<= $count; $i++){
            $id = "addProjectsC".$i;
            $title = $request->input($id);
            $id = "addProjArea".$i;
            $d = $request->input($id);
            $desc[] = ["title"=>$title, 'd'=>$d];
        }
        $newItem->description = json_encode($desc);
        if ($request->input('addPages2')){
            $newItem->cat_id = $request->input('addPages2');
        }
        else{
            $newItem->cat_id = $request->input('addPages1');
        }
        $images = $request->prewImgProjects;
        if (count($images)) {
            $firstImg = array_shift($images);
            $pref = rand(1, 10000);
            $name = $pref .$firstImg->getClientOriginalName();
            $firstImg->move(public_path() . '/images/news/', $name);
            $newItem->img = "/public/images/news/" . $name;
            $newItem->save();
            $newMedia = new Media_Project();
            $newMedia->img = $newItem->img;
            $newMedia->project_id = $newItem->id;
            $newMedia->save();
            foreach ($images as $f) {
                    $pref = rand(1, 10000);
                    $name = $pref . $f->getClientOriginalName();
                    $f->move(public_path() . '/images/news/', $name);
                    $newMedia = new Media_Project();
                    $newMedia->img = "/public/images/news/" . $name;
                    $newMedia->project_id = $newItem->id;
                    $newMedia->save();
            }
        }
        else{
            $newItem->img ="/public/images/empty.png";
            $newItem->save();
        }
        return back();
    }

    public function edit($id=null){
        if (!count(Auth::user())){
           return redirect("/login");
        }
        $menu = Menu::mainType(0,4);
        $parrent_cat = 0;
        $cat = 0;
        $itemNew = new Project();
        $media = new Media_Project();
        if ($id){
            $itemNew = Project::getItem($id);
            $media = Media_Project::getItemMedia($id);
        }
        return view('admin.addProject', ['item' => $itemNew, 'media'=>$media, 'parrent_cat'=>$parrent_cat, 'cat'=>$cat, 'menu'=>$menu]);
    }




}
