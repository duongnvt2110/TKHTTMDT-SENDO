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
Route::get('index',[
	'as'=>'home',
	'uses'=>'HomeController@get_index'
]);
Route::get('view-account',[
	'as'=>'view-account',
	'uses'=>'AccountController@get_account'
]);
Route::post('login-account',[
	'as'=>'login-account',
	'uses'=>'AccountController@login'
]);
Route::get('view-item',[
	'as'=>'view-item',
	'uses'=>'ProductController@get_index'
]);
Route::post('show-item',[
	'as'=>'show-item',
	'uses'=>'ProductController@show_item'
]);
Route::get('post-item',[
	'as'=>'post-item',
	'uses'=>'PostController@get_index'
]);
Route::post('get-shopid',[
	'as'=>'get-shopid',
	'uses'=>'PostController@get_shopid'
]);
Route::post('post-item',[
	'as'=>'post-item',
	'uses'=>'PostController@post_product'
]);