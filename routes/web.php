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




Route::group([], function(){

    //后台首页
    Route::get('/admin', 'Admin\IndexController@index');
    //后台用户
    Route::resource('admin/user','Admin\UserController');
    //后台一级分类
    Route::resource('admin/onetype','Admin\onetype\OneController');

    Route::get('/admin/onestajax','Admin\onetype\OneController@statusajax');

    //后台二级分类
    Route::resource('admin/twotype','Admin\twotype\TwoController');

    Route::get('/admin/twostajax','Admin\twotype\TwoController@statusajax');


});

