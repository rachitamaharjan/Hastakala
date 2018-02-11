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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', array('as'=>'authors','uses'=>'authors@index'));

Route::get('/authors/new', array('as'=>'newAuthor','uses'=>'authors@new'));

Route::resource('posts','postController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
