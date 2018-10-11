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

Route::redirect('/', '/dashboard');

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
Route::get('/dashboard', 'DashboardController@index')->middleware('auth')->name('dashboard');
Route::get('/dashboard/how-to', 'DashboardController@howTo')->name('dashboard.how_to');

/*
|--------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
|*/
Route::get('/gallery/{gallery}', 'GalleryController@show')->middleware('auth')->name('gallery.show');
Route::post('/gallery', 'GalleryController@store')->middleware('auth')->name('gallery.store');
Route::delete('/gallery/{gallery}', 'GalleryController@destroy')->middleware('auth')->name('gallery.delete');
Route::post('/gallery/{gallery}/images', 'GalleryImagesController@store')->middleware('auth')->name('gallery.store_image');
Route::delete('/image/{image}', 'GalleryImageController@destroy')->middleware('auth')->name('image.delete');
