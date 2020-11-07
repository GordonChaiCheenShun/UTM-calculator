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

Route::get('/', 'PagesController@index');

Route::get('/admin', 'PagesController@admin');

Route::get('/list', 'PagesController@studentlist');

Route::get('/registration', 'PagesController@registration');

Route::get('/home', 'PagesController@studenthome');

Route::get('/login', 'PagesController@login');

Route::get('/view', 'PagesController@view');

Route::get('/edit', 'PagesController@edit');

Auth::routes();

Route::resource('list','PostsController');