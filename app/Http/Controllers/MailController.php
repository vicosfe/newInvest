<?php


namespace App\Http\Controllers;

use App;
use App\Mail;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
class MailController extends Controller
{

    public function add( Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:mails|max:255',
        ]);
        $mail = new Mail();
        $mail->email;
        $mail->save();
        return back();
    }

}
