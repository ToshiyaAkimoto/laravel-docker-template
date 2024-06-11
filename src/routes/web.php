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

//URLのパスが第一引数の時、第二引数を実行する
Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', 'TodoController@index');