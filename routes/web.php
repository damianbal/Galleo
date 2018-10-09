<?php

use Illuminate\Support\Facades\Auth;

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

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|*/
Auth::routes();

Route::get('/sign-up', 'AuthController@signUp')->middleware('guest')->name('login');
Route::get('/sign-in', 'AuthController@signIn')->middleware('guest');


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|*/
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
|*/
Route::get('/gallery/{gallery}', 'GalleryController@show')->middleware('auth');

