<?php


namespace App\Http\Controllers;

use App;
use App\Article;
use App\Menu;
use App\Media_Article;
use App\Media_Articledoc;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $menu;
    protected $rightmenu;

    public function __construct()
    {
        $items = Menu::main();
        $this->menu = $items;


    }

    public function index($id)
    {
        $items = Article::getItem($id);
        $cat = Menu::find($id);
        $right = Menu::main($cat->parrent_id);
        $this->rightmenu = $right;
        return view('investment_project', ['items' => $items, 'menu'=>$this->menu, "right"=> $this->rightmenu, "cat"=>$cat]);


    }

    public function item($id)
    {
        $item = Article::getItemOne($id);
        if ($item->cat_id !=0){
            $cat = Menu::find($item->cat_id);
            $right = Menu::main($cat->parrent_id);
        }
        else {
              $cat = [];
              $right = Menu::main();
        }

        $this->rightmenu = $right;
        $docs = Media_Articledoc::index($id);
        $media = Media_Article::index($id);
        return view('articlePage', ['item' => $item, 'menu'=>$this->menu, "right"=> $this->rightmenu, 'media'=>$media, "cat"=>$cat, 'docs'=>$docs]);


    }


}
