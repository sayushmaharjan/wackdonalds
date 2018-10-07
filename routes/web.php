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

Route::resource('admin', "Admin\AdminController@index");
Route::resource('/product', "Admin\ProductController");

// Route::group(['prefix'=> 'admin'], function(){

// });


Route::resource('restaurant', 'RestaurantController@show');
Route::get('cart/{id}', 'RestaurantController@show');
// Route::resource('product', 'ProductController');

Route::get('/add-to-cart/{id}', ['uses'=>'ProductController@addToCart', 'as' =>'product.addToCart']
	);

Route::post('/login/submit','LoginController@login')->name('login');
Route::get('/login','LoginController@getloginpage')->name('getloginpage');

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart','CartController@cart')->name('cart');
