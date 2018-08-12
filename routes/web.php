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


// Auth Logic...
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Core Logic...
Route::get('/cards', function () {
    return view('templates.card');
});

Route::get('/', function () {
    return view('templates.index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/lab', function () {
    return view('templates.lab');
});

Route::get('/turns/{id}', 'TurnsController@index');

Route::get('/events/show', 'EventsController@show');
