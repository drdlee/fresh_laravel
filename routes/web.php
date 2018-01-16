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

/*
Route::get('/user/{id}/{name}', function ($id, $name){
  return "This is the User page, with userID: {$id} and name: {$name}";
});
*/

Route::get('/', 'PagesController@Index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
/*
^^^ Jadi ini akan punya alamat untuk ke "posts" contoh: "www.kaskus.com/posts/create",
dan likned to PostsController, dimana dalam PostsController terdapat function untuk :
- ambil data
- hapus data
- update data
*/
