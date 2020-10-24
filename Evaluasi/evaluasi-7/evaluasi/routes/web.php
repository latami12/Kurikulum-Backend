<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('artikel', 'ArticleController')->middleware('auth');
// Route::resource('welcome', 'WelcomeController');

//CRUD
// Route::get('/artikel', 'ArticleController@index');
// Route::get('/artikel/create', 'ArticleController@create');
// Route::get('/artikel/{slug}', 'ArticleController@show');
// Route::post('/artikel', 'ArticleController@store');
// Route::get('/artikel/{id}/edit', 'ArticleController@edit');
// Route::put('/artikel/{id}', 'ArticleController@update');
// Route::delete('/artikel/{id}', 'ArticleController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'WelcomeController@index');
Route::get('/{slug}', 'WelcomeController@show');
Route::get('/category/{categpry}', 'WelcomeController@cate');