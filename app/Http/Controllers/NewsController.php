<?php

namespace App\Http\Controllers;

use App;
use App\News;
use App\Media_New;
use App\Menu;
use Illuminate\Http\Request;



class NewsController extends Controller
{
    protected $menu;

    public function __construct()
    {
        $items = Menu::main();
        $this->menu = $items;
    }

    public function index(){
        $news = News::getItemsPage();
        $nextPage = $news->currentPage() +1;
        return view('news', ['news' => $news, "page" =>$nextPage, 'menu'=>$this->menu]);

    }
    public function getItem($id){

        $itemNew = News::getItem($id);
        $media = Media_New::getItemMedia($id);
        return view('cardNews', ['item' => $itemNew, 'media'=>$media, 'menu'=>$this->menu]);
    }
    public function getNewItems(Request  $request){
        $news = News::getItemsPage();
        if ($request->input('nextPage')){
            return ($news->nextPageUrl())? $news->nextPageUrl() : 0;
        }

        return view('newsAdd', ['news' => $news, 'menu'=>$this->menu]);
    }


}
