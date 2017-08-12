<?php


namespace App\Http\Controllers;

use App;
use App\News;
use App\Media_New;
use App\Link;
use App\Poll;
use Illuminate\Http\Request;
use App\Menu;
use App\Answer;
use App\Article;
use App\Media_Articledoc;
class IndexController extends Controller
{

    protected $menu;
    protected $linkItems;

    public function __construct()
    {
        $items = Menu::main();
        $this->menu = $items;
        $this->linkItems = Link::all();
    }
    public function index(Request $request)
    {
        $news = News::main();
        $newsMedia = Media_New::index();
        $poll = Poll::orderBy("id","desc")->first();
        $ip = $request->ip();
        $answ = Answer::where("ip",$ip)->where("poll_id",$poll->id)->first();
        $result = [];
        if (count($answ)){

            $data = json_decode($poll->data);
            $count = Answer::where("poll_id",$poll->id)->count();
            foreach ($data as $d){
                $temp = $d;
                $ans = Answer::where("value",$d)->where("poll_id",$poll->id)->count();
                if ($ans>0){
                    $res = round($ans*100/$count);
                }
                else{
                    $res = 0;
                }
                $result["title"] = $poll->title;
                $result["items"][] = ["title"=>$temp, "res"=>$res];
            }
            $poll=null;

        }

        return view('index', ['news' => $news, 'media'=> $newsMedia, 'menu'=>$this->menu,"answ"=>$answ, "result"=>$result,  "linkItems"=>$this->linkItems, "poll"=>$poll]);


    }

    public function answer(Request $request)
    {
        $ans = new Answer();
        $ans->value = $request->input("question");
        $ans->poll_id = $request->input("poll_id");
        $ans->ip = $request->ip();
        $ans->save();
        return back();

    }
    public function project()
    {
        $newsMedia = Media_New::index();
        return view('project', ['media'=> $newsMedia, 'menu'=>$this->menu, "linkItems"=>$this->linkItems]);


    }

    public function search(Request $request)
    {

        $keyword = $request->input("mainSearch");
        $result = [];
        if (strlen($keyword)>2){
            $result["articles"] = Article::where("title", "LIKE","%$keyword%")
                ->orWhere("description", "LIKE", "%$keyword%")->get();
            $result["news"] = News::where("title", "LIKE","%$keyword%")
                ->orWhere("content", "LIKE", "%$keyword%")->get();
            $result["docs"] = Media_Articledoc::where("title", "LIKE","%$keyword%")->get();
        }

        return view('search', ['menu'=>$this->menu, "linkItems"=>$this->linkItems, "result"=>$result]);


    }

    public function article()
    {
        $newsMedia = Media_New::index();
        return view('article', ['media'=> $newsMedia, 'menu'=>$this->menu, "linkItems"=>$this->linkItems]);


    }
}
