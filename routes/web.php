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
Route::post('/', 'PagesController@store');

Route::post('success','PagesController@success');
Route::get('link', 'PagesController@link');

Route::get('about', 'PagesController@about');

Route::get('r/{id}', 'PagesController@show')->where('id', '[0-9]+');

Route::get('file', 'PagesController@file');
Route::post('file', 'PagesController@fileDownload');


