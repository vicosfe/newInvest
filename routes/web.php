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
Auth::routes();
Route::get('/logout','Admin\IndexController@logout');
Route::get('/register','Admin\IndexController@login');




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

    Route::get('/admin/home', function () {
        return view('admin.admMain');
    });

    Route::get('/admin/edit/news/{id?}', 'Admin\NewsController@edit');
    Route::post('/admin/add/news/{id?}','Admin\NewsController@add');

    Route::get('/admin/edit/articles/{id?}', 'Admin\ArticleController@edit');
    Route::post('/admin/add/articles/{id?}','Admin\ArticleController@add');

    Route::get('admin/edit/docs', function () {
        return view('admin.addDocs');
    });
    Route::get('admin/edit/pages', function () {
        return view('admin.addUniquePage');
    });

    Route::get('admin/change/news', function () {
        return view('admin.editNews');
    });

    Route::get('admin/change/docs', function () {
        return view('admin.editDocs');
    });

    Route::get('admin/change/articles', function () {
        return view('admin.editArticles');
    });
 


    /*СТАТЬИ БЛЯТ*/
    Route::get('/article/{id?}', 'ArticleController@item');

    Route::get('/articles/{id?}','ArticleController@index');




});


