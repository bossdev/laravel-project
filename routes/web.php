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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/listProject','ProjectController@list')->name('listProject');
Route::get('/login','Auth\LoginController@getLoginPage')->name('get.login');
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/test','ProjectController@getTest')->name('get.test');

Route::get('/boss', function () {
    return 'hello boss za';
});
Auth::routes();