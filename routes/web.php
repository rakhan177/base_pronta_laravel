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

// ROTTE GUESS
Route::get('/', 'HomeController@index');
// /ROTTE GUESS

// ROTTE AUTH
Auth::routes();
// /ROTTE AUTH

// ROTTE ADMIN
Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->name("admin.")
->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
});
// /ROTTE ADMIN