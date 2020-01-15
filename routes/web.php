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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

Auth::routes();
Route::group(['middleware'=>['auth'],'prefix' => 'admin'], function(){
    Route::get('/', 'DashboardController@index')->name('adminDashboard');
	Route::resource('category', 'CategoryController');
	Route::resource('products', 'ProductController');
	Route::resource('users', 'UserController');
	Route::resource('blogs', 'BlogController');

});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about_us', 'HomeController@aboutUs')->name('about_us');
Route::get('/contact_us', 'HomeController@contactUs')->name('contact_us');
Route::get('/private_policy', 'HomeController@privatePolicy')->name('private_policy');
Route::get('/terms_of_use', 'HomeController@termsOfUse')->name('terms_of_use');

Route::get('/category', 'CategoryController@categories')->name('category');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/blog_detail', 'BlogController@blogDetail')->name('blog_detail');
Route::get('/product_detail', 'ProductController@productDetail')->name('product_detail');
Route::get('/product', 'ProductController@product')->name('product');
Route::get('/quote', 'UserController@quote')->name('quote');
