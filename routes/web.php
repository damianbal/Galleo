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

Route::get('/sign-up', 'AuthController@signUp');
Route::get('/sign-in', 'AuthController@signIn');


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|*/
Route::get('/dashboard', 'DashboardController@index');

/*
|--------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
|*/

Route::get('/', function () {
    return view('welcome');
});
