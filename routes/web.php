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

    Route::get('test3', 'TestController@test3');

    Route::get('test4', 'TestController@test4');

    Route::get('test5', 'TestController@test5');

    //CSFR验证
    Route::get('test6', 'TestController@test6');
    Route::post('test7', 'TestController@test7')->name('test7');

    //模型的增删改查
    Route::any('test8', 'TestController@test8');
    Route::get('test9', 'TestController@test9');
    Route::get('test10', 'TestController@test10');
    Route::get('test11', 'TestController@test11');
    Route::any('test12', 'TestController@test12');
    //文件上传
    Route::any('test14', 'TestController@test14');
    //分页
    Route::get('test15', 'TestController@test15');
    //相应方式
    Route::get('test16', 'TestController@test16');
    Route::get('test17', 'TestController@test17');
    //会话控制
    Route::get('test18', 'TestController@test18');
    //联表查询
    Route::get('test20', 'TestController@test20');
    //一对一
    Route::get('test21', 'TestController@test21');
    //一对多
    Route::get('test22', 'TestController@test22');
    //多对多
    Route::get('test23', 'TestController@test23');
});
