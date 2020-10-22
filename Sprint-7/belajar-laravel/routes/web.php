<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('artikel', 'ArticleController');

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

