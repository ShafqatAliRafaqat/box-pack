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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
