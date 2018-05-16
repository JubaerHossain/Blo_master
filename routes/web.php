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

Route::get('/', 'WelcomeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/About', 'AboutController@index');
Route::get('/Q&A', 'FacController@index');
Route::get('/contact', 'ContactController@index');

//Admin Route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Crete_post', 'PostController@index');
Route::post('/Crete_post', 'PostController@store');
Route::get('/Post_list', 'PostController@Post_list');
Route::post('/Update_post', 'PostController@edit');

Route::get('/create_category', 'CategoryController@index');
Route::post('/create_category', 'CategoryController@store');
Route::get('/category_list', 'CategoryController@category_list');

Route::get('/Tag', 'TagController@index');
Route::post('/Tag', 'TagController@store');
Route::get('/Tag_list', 'TagController@Tag_list');

Route::get('/slug', 'SlugController@index');
Route::post('/slug', 'SlugController@store');
Route::get('/slug_list', 'SlugController@slug_list');
