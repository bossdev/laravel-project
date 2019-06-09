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

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    // Route::get('/listProject','ProjectController@list')->name('listProject');
    Route::get('/listProject','ProjectController@list')->name('listProject');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
});
Route::get('/test','ProjectController@getTest')->name('get.test');  
// Auth route
Route::middleware(['guest'])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    });
    // Route::post('/register','Auth\RegisterController@postRegister');
    Auth::routes();
});