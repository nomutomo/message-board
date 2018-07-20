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

/* Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'MessagesController@index');

/*
//一覧ページの表示
Route::get('messages/{id}', 'MessagesController@show');
Route::post('messages', 'MessagesController@store')->name('messages.store');
Route::put('messages/{id}', 'MessagesController@update')->name('messages.update');
Route::delete('messages/{id}', 'MessagesController@destroy')->name('messages.destroy');

//index: showの補助ページ
Route::get('messages', 'MessagesController@index')->name('messages.index');
//create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');
//show: 個別のメッセージ詳細ページ
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');
//edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
*/

//上記ルーティングを下記の一行に置き換える（同じ機能）
Route::resource('messages', 'MessagesController');
// 複写機能（ボタン）
Route::get('messages/{id}/copy', 'MessagesController@copy');
