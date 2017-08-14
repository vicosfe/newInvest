<?php


namespace App\Http\Controllers\Admin;

use App;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{

    public function directcommunication(){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $items = Message::where("category",1)->get();
        return view('admin.notificationDirectCommunication', ["items"=>$items]);

    }

    public function window(){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $items = Message::where("category",3)->get();
        return view('admin.notificationsWindow', ["items"=>$items]);

    }

    public function goinvest(){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $items = Message::where("category",2)->get();
        return view('admin.notificationDirectCommunication', ["items"=>$items]);

    }

    public function search(Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $keyword = json_encode($request->input("searchNotification"));
        $result = [];
        if (strlen($keyword)>2){
            $result = Message::where('data',"LIKE",'%'.$keyword.'%')->get();
        }

        return view('admin.notificationSearch', ["result"=>$result]);

    }

    public function remove($id = null){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        if ($id){
            Message::destroy($id);
        }
        return back();

    }







}
