<?php

namespace App\Http\Controllers;

use App;
use App\News;
use Illuminate\Http\Request;



class NewsController extends Controller
{
    public function index(){

        $news = News::getItemsPage();
        $nextPage = $news->currentPage() +1;
        return view('news', ['news' => $news, "page" =>$nextPage]);
    }
    public function getItem($id){

        $itemNew = News::getItem($id);
        return view('cardNews', ['item' => $itemNew]);
    }
    public function getNewItems(Request  $request){
        $news = News::getItemsPage();
        if ($request->input('nextPage')){
            return ($news->nextPageUrl())? $news->nextPageUrl() : 0;
        }

        return view('newsAdd', ['news' => $news]);
    }


}
