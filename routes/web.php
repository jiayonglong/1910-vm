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
Route::get('/info',function(){
    phpinfo();
});
Route::get('/test/hellow','TestController@hellow');
Route::get('/test/redis1','TestController@redis1');
Route::get('/goods/detail','Goods\GoodsController@detail');//商品详情



Route::get('/user/reg','User\IndexController@reg');
Route::post('/user/regDo','User\IndexController@regDo');
Route::get('/user/login','User\IndexController@login');
Route::post('/user/loginDo','User\IndexController@loginDo');
Route::get('/user/center','User\IndexController@center');//个人中心
