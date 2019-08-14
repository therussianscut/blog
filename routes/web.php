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

Route::get('/pages/welcome', 'PagesController@getIndex');
Route::get('/pages/about', 'PagesController@getAbout');
Route::get('/pages/contact', 'PagesController@getContact');