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

	Route::post('/delete_quote/{id}', 'UserController@deleteQuote')->name('delete_quote');
	Route::get('/quote', 'UserController@allQuote')->name('quotes');
	Route::post('/delete_contact/{id}', 'UserController@deleteContact')->name('delete_contact');
	Route::get('/contacts', 'UserController@contacts')->name('contacts');
	Route::get('/product_faq', 'UserController@productFaq')->name('product_faq');

});
Route::get('/product/{product_title}', 'ProductController@productDetailRedirect')->name('product_detail_redirect');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about_us', 'DashboardController@aboutUs')->name('about_us');
Route::get('/contact_us', 'DashboardController@contactUs')->name('contact_us');
Route::POST('/contact_us_form', 'UserController@StoreContactUs')->name('contact_us_form');
Route::get('/private_policy', 'DashboardController@privatePolicy')->name('private_policy');
Route::get('/terms_of_use', 'DashboardController@termsOfUse')->name('terms_of_use');
Route::get('/product', 'ProductController@product')->name('product');
Route::get('/quote', 'UserController@quote')->name('quote');
Route::post('/store_quote', 'UserController@storeQuote')->name('store_quote');
Route::post('/search', 'CategoryController@LiveSearch')->name('live-search');
Route::get('/box-by-style', 'CategoryController@categoriesboxbystyle')->name('boxbystyle');
Route::get('/Retail-Boxes', 'CategoryController@categoriesRetailBoxes')->name('RetailBoxes');
Route::get('/box-by-industry', 'CategoryController@categories')->name('boxbyindustry');
Route::get('/blogs', 'BlogController@blog')->name('blog');

Route::get('/blog/{title}', 'BlogController@blogDetail')->name('blog_detail');
Route::get('/p/{product_title}', 'ProductController@productDetail')->name('product_detail');
Route::get('/{c}/{title?}', 'CategoryController@categoryProducts')->name('category_detail');

Route::get('{title}', 'CategoryController@categoryProductsRedirect')->name('category_detail_redirect');

