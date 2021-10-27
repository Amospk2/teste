<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', "CursoController@index");
    Route::get('/create', "CursoController@create");
    Route::post('/create/event', 'CursoController@store');
    Route::get('/events/{id}', "CursoController@show");
    Route::get('/home', 'HomeController@index')->name('home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
