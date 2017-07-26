<?php
use Mcamara\LaravelLocalization\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$localization = new LaravelLocalization();
Route::get('/parseMkala', 'ParserController@index');
Route::group(['prefix' => $localization->setLocale()], function()
{
    Route::get('/news', 'NewsController@index');
    Route::get('/newsJson', 'NewsController@getNewItems');
    Route::get('/news/{id?}', 'NewsController@getItem');
    Route::get('/logistika', function () {
        return view('logistika');
    });
    Route::get('/investment_project', function () {
        return view('investment_project');
    });
    Route::get('/support', function () {
        return view('support');
    });
    Route::get('/', "IndexController@index");
    Route::get('/direct', 'PageController@directCommunication');
    Route::get('feedBack', 'PageController@feedBack');
    Route::get('/u', 'PageController@u');
    Route::get('/pp', 'PageController@pp');
    Route::get('/search', 'PageController@search');

    Route::get('/documents', function () {
        return view('documents');
    });
     Route::get('/admMain', function () {
        return view('admin.admMain');
    });
      Route::get('/add', function () {
        return view('admin.add');
    });



    /*СТАТЬИ БЛЯТ*/
    Route::get('/article/{id?}', 'ArticleController@item');

    Route::get('/articles/{id?}','ArticleController@index');




});


