<?php

use Illuminate\Support\Facades\Route;

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

Route::get('post/', 'PostController@read');
Route::get('post/delete/{id}', 'PostController@del');
Route::get('post/add', 'PostController@add');
Route::get('post/show/{id}', 'PostController@show');
Route::get('post/show_trashed', 'PostController@showOnlyTrashed');

Route::get('user/add', 'UserController@add');
Route::get('user/show/{id}', 'UserController@show');
