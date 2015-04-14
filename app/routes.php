<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
//index
Route::get('posts/index','PostController@index');
//登録画面を表示する
Route::get('posts/form','PostController@form');
//DBにデータを入れる
Route::post('posts','PostController@register');
//一つのPostを表示する
Route::get('posts/user_list','PostController@user_list');
//ユーザー情報変更
Route::get('posts/edit/{id}','PostController@edit');
//削除画面
Route::get('posts/destroy','PostController@destroy');
//検索画面
Route::get('posts/search','PostController@search');