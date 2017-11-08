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


Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

Route::resource('posts', 'PostController');

//Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

//Tag Routes
Route::resource('tags', 'TagController', ['except' => ['create']]);

//blog index route
Route::get('blog', [ 'as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
//blog single post page
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
	->where('slug', '[\w\d\-\_]+');

// Authentication routes
Auth::routes();
