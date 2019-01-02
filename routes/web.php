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

Route::get('/order','Order@order');
Route::get('/user/index/{id}','Vip\IndexController@index');
Route::get('/user/add','Vip\IndexController@add');
Route::get('/user/update/{id}','Vip\IndexController@update');
Route::get('/user/delete/{id}','Vip\IndexController@delete');
Route::get('/user/list','Vip\IndexController@list');