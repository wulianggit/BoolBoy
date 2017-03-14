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

Auth::routes();

// 后台路由设置
Route::group(['namespace' => 'Admin', 'prefix' => 'backend', 'middleware' => 'auth'], function () {
    // 首页
    Route::get('/', 'HomeController@index');
});


