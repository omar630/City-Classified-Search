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

Route::get('/', 'CommonController@home')->name('homepage');

Route::get('about', 'CommonController@about')->name('aboutpage');

Route::get('catagories', 'CommonController@catagories')->name('catagoriespage');

Route::get('listing', 'CommonController@listing')->name('listingpage');

Route::get('contact', 'CommonController@contact')->name('contactpage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
