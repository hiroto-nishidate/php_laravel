<?php

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

Route::get('/', function () {
    return view('welcome');
});

//課題3 「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。

// Route::get(‘XXX’,‘AAAController@bbb’);

//課題4 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、
//admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら
//ProfileController の edit Action に割り当てるように設定してください。

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
    Route::post('news/create','Admin\NewsController@create')->middleware('auth');
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth'); # PHP-Laravel 13　課題6
    Route::get('news', 'Admin\NewsController@index')->middleware('auth'); // PHP-Laravel 15
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // PHP-Laravel 16
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); // PHP-Laravel 16
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth'); // PHP-Laravel 16
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth'); 
    Route::get('profile/delete','Admin\ProfileController@delete')->middleware('auth');
});

Auth::routes();
Route::get('/home','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');