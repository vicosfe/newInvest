<?php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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




Route::post('/', "IndexController@answer");
Route::post('/search', "IndexController@search");
Route::post('/direct', 'PageController@directCommunicationSend');
Route::post('feedBack', 'PageController@feedBackSend');
Route::post('/messages/project', "PageController@projectSend");
Route::post('/admin/add/news','Admin\NewsController@add');
Route::post('/admin/add/articles/{id?}','Admin\ArticleController@add');
Route::post('/admin/add/pages/{id?}','Admin\PagesController@add');
Route::post('/admin/add/projects/{id?}','Admin\ProjectsController@add');
Route::post('admin/settings/opros', 'Admin\PollsController@add');
Route::post('admin/settings/add/link', 'Admin\LinksController@add');
Route::post('admin/settings/menu/add', 'Admin\MenuController@add');
Route::post('/admin/settings/menu/remove', 'Admin\MenuController@remove');
Route::post('/admin/settings/menu/edit', 'Admin\MenuController@edit');
Route::post('admin/settings/ad', 'Admin\AdsController@add');
Route::post('/mail', 'MailController@add');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
{
    Auth::routes();
    Route::get('/logout','Admin\IndexController@logout');
    Route::get('/register','Admin\IndexController@login');
    Route::get('/', "IndexController@index");
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
    Route::get('/direct', 'PageController@directCommunication');

    Route::get('/parseMkala', 'ParserController@index');

    Route::get('feedBack', 'PageController@feedBack');



    Route::get('/page/{id}', 'PageController@page');
    Route::get('/pp', 'PageController@pp');
    Route::get('/search', 'PageController@search');


   /* Route::get('/documents', function () {
        return view('documents');
    });
*/
/*ADMIN*/


    Route::get('/admin/home', function () {
        return view('admin.admMain');
    });

    Route::get('/admin/edit/news/{id?}', 'Admin\NewsController@edit');


    Route::get('/admin/edit/articles/{id?}', 'Admin\ArticleController@edit');


    Route::get('/admin/edit/pages/{id?}', 'Admin\PagesController@edit');


    Route::get('admin/edit/projects/{id?}', 'Admin\ProjectsController@edit');



    Route::get('admin/change/news', function () {
        return view('admin.editNews');
    });

    Route::get('admin/change/docs', function () {
        return view('admin.editDocs');
    });

    Route::get('admin/change/articles', function () {
        return view('admin.editArticles');
    });

    Route::get('admin/change/pages', function () {
        return view('admin.editUniquePages');
    });

    Route::get('admin/change/projects', function () {
        return view('admin.editProjects');
    });

    Route::get('admin/settings/opros', 'Admin\PollsController@index');

    Route::get('admin/settings/opros/remove/{id}', 'Admin\PollsController@remove');

    Route::get('admin/settings/usefullink', 'Admin\LinksController@index');

    Route::get('admin/settings/remove/link/{id?}', 'Admin\LinksController@remove');


    Route::get('admin/settings/menu', 'Admin\MenuController@index');

    Route::get('admin/settings/ad', 'Admin\AdsController@index');
    Route::get('admin/settings/ad/remove/{id}', 'Admin\AdsController@remove');

    Route::get('admin/settings/slide', function () {
        return view('admin.settingSlide');
    });

    Route::get('admin/notification/window', 'Admin\MessagesController@window');
    Route::get('admin/notification/search/{keyword?}', 'Admin\MessagesController@search');
    Route::get('admin/notification/goinvest', 'Admin\MessagesController@goinvest');
    Route::get('admin/notification/directcommunication', 'Admin\MessagesController@directcommunication');
    Route::get('admin/messages/remove/{id}', 'Admin\MessagesController@remove');


    /*СТАТЬИ ыыы*/
    Route::get('/article/{id?}', 'ArticleController@item');

    Route::get('/articles/{id?}','ArticleController@index');

    Route::get('/projects/{id?}','ProjectsController@index');

    Route::get('/project/{id?}', 'ProjectsController@item');

});


