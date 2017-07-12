<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\ParserController;
use Illuminate\Routing\UrlGenerator;

class IndexController extends Controller
{
    public function index()
    {

        return view('index');
    }
}
