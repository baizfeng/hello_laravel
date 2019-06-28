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
    return phpinfo();
});

Route::any('/test', function () {
    echo "当前用户ID是" . $_GET['id'];
});

Route::group(['prefix' => '/home/test'], function () {
    //增
    Route::get('add', 'TestController@add');
	//删
    Route::get('del', 'TestController@del');
	//改
    Route::get('update', 'TestController@update');
	//查
    Route::get('select', 'TestController@select');
});
