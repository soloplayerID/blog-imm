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
Auth::routes(['register'=> false, 'reset'=>false]);
Route::get('/', 'BlogController@index');
Route::get('post/{slug}', 'BlogController@show')->name('blog.post');
Route::resource('post.comment', 'CommentController')->except(['index', 'create', 'show']);
Route::post('/img-upload', 'BlogController@imgUplaod')->name('blog.image_upload');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
 \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::group(['middleware' => 'auth'], function() {
  Route::get('admin', 'HomeController@index')->name('home');
  Route::resource('admin/category', 'CategoryController');
  Route::resource('admin/tag', 'TagController');
  Route::get('admin/post/trash', 'PostController@trash')->name('post.trash');
  Route::post('admin/post/{post}/restore', 'PostController@restore')->name('post.restore');
  Route::delete('admin/post/{id}/deletepermanent', 'PostController@deletePermanent')->name('post.deletepermanent');
  Route::resource('admin/post', 'PostController');
  Route::resource('admin/user', 'UserController');
});
