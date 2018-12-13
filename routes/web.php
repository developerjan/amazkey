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

// pages
Route::get('/', 'PagesController@index');
Route::get('/resetPassword/{id}/{key}', 'PagesController@resetPassword');


// User routes
Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::post('/forgotPassword', 'UserController@forgotPassword');
Route::post('/resetPassword', 'UserController@resetPassword');
Route::get('/flow/loadSkins/{site_type}', 'UserController@loadSkins');
Route::post('/flow/createSite', 'UserController@createSite');
Route::get('name', 'UserController@name');
Route::resource('queries', 'QueryController@search');

// Admin routes
Route::resource('/dashboard', 'AdminController');

Route::get('/blockManager', 'AdminController@blockManager');
Route::post('/blockManager', 'AdminController@editBlockStatus');
Route::get('/blockEdit', 'AdminController@editBlockContent');
