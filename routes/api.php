<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Api\RegisterController@action');
Route::post('login', 'Api\LoginController@action');
Route::get('me', 'Api\UserApiController@me')->middleware('auth:api');
Route::post('category', 'Api\CategoryApiController@store');
Route::get('category', 'Api\CategoryApiController@index');
Route::get('post', 'Api\PostApiController@index');
Route::get('post/{slug}', 'Api\PostApiController@show');
Route::get('tag', 'Api\TagApiController@index');
Route::resource('post.comment', 'Api\CommentApiController')->except(['index', 'create', 'show']);
