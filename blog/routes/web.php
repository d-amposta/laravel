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

Route::get('/create', 'ArticlesController@createArticle');

Route::post('/create', 'ArticlesController@saveNewArticle');

Route::get('/home', 'ArticlesController@showArticle');

Route::get('/home/{id}', 'ArticlesController@displayOneArticle');

Route::get('/home/delete/{id}', 'ArticlesController@deleteArticle');

Route::get('/edit/{id}', 'ArticlesController@editArticle');

Route::post('/edit/{id}', 'ArticlesController@saveEditArticle');

Route::post('create_comment/{id}', 'CommentsController@saveNewComment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
