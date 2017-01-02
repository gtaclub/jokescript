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


Auth::routes();

Route::get('/', 'HomeController@index');

Route::post('/submit', 'SubmitController@submit');

Route::get('admin/dashboard', function(){
   return view('admin/dashboard');
});

Route::resource('admin/dashboard', 'admin\DashboardController');

Route::get('admin/joke/approve/{id}', 'admin\DashboardController@approve');
Route::resource('admin/jokes/delete', 'admin\JokesController');
Route::resource('admin/jokes', 'admin\JokesController');