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

Route::get('/create', function () {
	return view('create');
});

Route::get('/create', 'TaskController@showTask');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'App\Http\Middleware\AdminMiddleware'], function() {
	Route::post('/create', 'TaskController@createNewTask');
	Route::get('/delete/{id}', 'TaskController@deleteTask');
});
