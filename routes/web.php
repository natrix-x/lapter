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

use App\Product;

Route::resource('/', 'SiteController');
Route::get('/contacts', 'SiteController@contacts');
Route::get('/about-us', 'SiteController@aboutUs');
Route::get('/delivery', 'SiteController@delivery');
Route::get('/blog', 'BlogController@index');
Route::get('/products', 'ProductController@index');
Route::get('/products/{product}', 'ProductController@show');

Route::get('/login', function (){
    return view('auth.login');
});
Route::get('/register', function (){
    return view('auth.register');
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/register', 'Auth\RegisterController@login')->name('register');