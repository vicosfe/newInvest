<?php


namespace App\Http\Controllers\Admin;

use App;
use App\Poll;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class PollsController extends Controller
{

    public function index(){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        $items = Poll::all();
        return view('admin.settingOpros', ["items"=>$items]);

    }

    public function add(Request $request){
        if (!count(Auth::user())){
            return redirect("/login");
        }

        $poll = new Poll();
        $poll->title = $request->input("addOpros");
        $data = [];
        for ($i=1; $i<=$request->input("kolichestvo");$i++){
            $id = "addOprosCaption".$i;
            $data[] = $request->input($id) ;
        }
        $poll->data = json_encode($data);
        $poll->save();
        return back();

    }


    public function remove($id = null){
        if (!count(Auth::user())){
            return redirect("/login");
        }
        if ($id){
            Poll::destroy($id);
        }
        return back();

    }







}
