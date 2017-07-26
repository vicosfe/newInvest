<?php


namespace App\Http\Controllers;

use App;
use App\News;
use App\Media_Article;
use Illuminate\Http\Request;
use App\Menu;


class PageController extends Controller
{

    protected $menu;

    public function __construct()
    {
        $items = Menu::main();
        $this->menu = $items;
    }

    public function directCommunication()
    {
        return view('directCommunication', ['menu'=>$this->menu]);

    }

    public function feedBack()
    {
        return view('feedBack', ['menu'=>$this->menu]);

    }
    public function about()
    {
        return view('feedBack', ['menu'=>$this->menu]);

    }

    public function u()

    {
        $cat = Menu::find(10);
        $right = Menu::main($cat->parrent_id);
        return view('support', ['menu'=>$this->menu, "right"=> $right, "cat"=>$cat]);

    }

    public function pp()

    {
        $cat = Menu::find(10);
        $right = Menu::main($cat->parrent_id);
        $media = Media_Article::index(3);
        return view('asd', ['menu'=>$this->menu, "right"=> $right, "cat"=>$cat, 'media'=>$media]);

    }

    public function search()

    {

        return view('search', ['menu'=>$this->menu]);

    }
}
