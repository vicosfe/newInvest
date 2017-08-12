<?php


namespace App\Http\Controllers;

use App;

use App\Media_Article;
use Illuminate\Http\Request;
use App\Menu;
use App\Message;
use App\Link;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    protected $menu;
    protected $linkItems;

    public function __construct()
    {
        $items = Menu::main();
        $this->menu = $items;
        $this->linkItems = Link::all();
    }

    public function directCommunication()
    {
        return view('directCommunication', ['menu'=>$this->menu, "linkItems"=>$this->linkItems]);

    }
    public function directCommunicationSend(Request $request)
    {

        $text = $request->input("directCommunicationMessage");
        $from = $request->input("directCommunicationEmail");
        $company = $request->input("directCommunicationCompany");
        $name = $request->input("directCommunicationfio");

        $data = ["company"=> $company, "text"=>$text, "from"=>$from, "name" => $name ];

        Mail::send('emails.main', $data, function ($m) use ($from)  {
            $m->from(env('MAIL_USERNAME'), 'Инвестиционный портал');
            $m->to(env('MAIL_MAIN'))->subject("Новое обращение!!!");
        });

        Session::flash('message', "Спасибо, ваше обращение обрабатывается");

        $newMessage = new Message();
        $newMessage->data =json_encode($data);
        $newMessage->category = 1;
        $newMessage->save();
        return redirect("/direct");

    }
    public function about()
    {
        return view('feedBack', ['menu'=>$this->menu, "linkItems"=>$this->linkItems]);

    }
    public function feedBack()
    {
        return view('feedBack', ['menu'=>$this->menu, "linkItems"=>$this->linkItems]);

    }

    public function feedBackSend(Request $request)
    {

        $text = $request->input("directCommunicationMessage");
        $from = $request->input("directCommunicationEmail");
        $company = $request->input("directCommunicationCompany");
        $name = $request->input("directCommunicationfio");
        $tel = $request->input("directCommunicationTel");


        $data = ["company"=> $company, "text"=>$text, "from"=>$from, "name" => $name, 'tel'=>$tel ];

        Mail::send('emails.feedback', $data, function ($m) use ($from)  {
            $m->from(env('MAIL_USERNAME'), 'Инвестиционный портал');
            $m->to(env('MAIL_MAIN'))->subject("Новое обращение!!!");
        });

        Session::flash('message', "Спасибо, ваше обращение обрабатывается");

        $newMessage = new Message();
        $newMessage->data =json_encode($data);
        $newMessage->category = 3;
        $newMessage->save();
        return back();

    }

    public function projectSend(Request $request)
    {

        $text = $request->input("goInvFormMessage");
        $from = $request->input("goInvFormEmail");
        $company = $request->input("goInvFormCompany");
        $name = $request->input("goInvFormFIO");

        $data = ["company"=> $company, "text"=>$text, "from"=>$from, "name" => $name ];

        Mail::send('emails.project', $data, function ($m) use ($from)  {
            $m->from(env('MAIL_USERNAME'), 'Инвестиционный портал');
            $m->to(env('MAIL_MAIN'))->subject("Новый инвестор!!!");
        });

        Session::flash('message', "Спасибо, ваше обращение обрабатывается");

        $newMessage = new Message();
        $newMessage->data =json_encode($data);
        $newMessage->category = 2;
        $newMessage->save();
        return back();

    }

    public function u()

    {
        $cat = Menu::find(10);
        $right = Menu::main($cat->parrent_id);

        return view('support', ['menu'=>$this->menu, "right"=> $right, "cat"=>$cat, "linkItems"=>$this->linkItems]);

    }

    public function pp()

    {
        $cat = Menu::find(10);
        $right = Menu::main($cat->parrent_id);
        $media = Media_Article::index(3);
        return view('asd', ['menu'=>$this->menu, "right"=> $right, "cat"=>$cat, 'media'=>$media, "linkItems"=>$this->linkItems]);

    }

    public function search()

    {

        return view('search', ['menu'=>$this->menu, "linkItems"=>$this->linkItems]);

    }
}
