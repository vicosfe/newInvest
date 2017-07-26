<?php


namespace App\Http\Controllers;

use App;
use App\News;
use App\Media_New;
use Illuminate\Http\Request;
use App\Menu;


class IndexController extends Controller
{

    protected $menu;

    public function __construct()
    {
        $items = Menu::main();
        $this->menu = $items;
    }
    public function index()
    {
        $news = News::main();
        $newsMedia = Media_New::index();
        return view('index', ['news' => $news, 'media'=> $newsMedia, 'menu'=>$this->menu]);


    }

    public function project()
    {
        $newsMedia = Media_New::index();
        return view('project', ['media'=> $newsMedia, 'menu'=>$this->menu]);


    }

    public function article()
    {
        $newsMedia = Media_New::index();
        return view('article', ['media'=> $newsMedia, 'menu'=>$this->menu]);


    }
}
