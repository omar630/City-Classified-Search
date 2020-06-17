<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;
use App\Category;
use App\Role;

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

Route::get('listing', 'PostController@index')->name('listingpage');

Route::get('contact', 'CommonController@contact')->name('contactpage');
Auth::routes();

Route::get('/home', 'CommonController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('search','PostController@searchFilter')->name('search-filter');

Route::group(['middleware' => ['adminmiddleware']], function () {
    Route::get('tesst',function(){
        return 1;
    });
});

Route::prefix('admin')->group(function() {
    Route::group(['middleware' => 'adminmiddleware'], function(){
        Route::get('/','AdminController@login')->name('admin.login');
        Route::get('login','AdminController@login')->name('admin.login');
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');

        Route::get('post/add', 'AdminController@getAddPost')->name('admin.addpost');
        Route::get('post/edit/{id}','AdminController@editPost')->name('admin.editpost');
        Route::post('post/update','AdminController@updatePost')->name('admin.updatepost');
        Route::get('post/delete/{id}', 'AdminController@deletepost')->name('admin.deletepost');

        Route::get('posts/approve','AdminController@approvalPage')->name('admin.postsapprove');
        Route::get('post/approve/{id}','AdminController@approvePost')->name('admin.confirmapprove');

        Route::post('post/add/save','AdminController@savePost')->name('admin.savepost');

        Route::get('profile', 'AdminController@Profile')->name('admin.profile');
        Route::get('post/all', 'AdminController@allPosts')->name('admin.allposts');
    });
});
