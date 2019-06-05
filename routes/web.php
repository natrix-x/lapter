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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard', 'DashboardController@index')->middleware(['auth', 'confirmed']);
Route::get('/users/{user}/request-confirmation', 'UserEmailConfirmationController@request')->name('request-confirm-email')->middleware('auth');
Route::post('/users/{user}/send-confirmation-email', 'UserEmailConfirmationController@sendEmail')->name('send-confirmation-email')->middleware('auth');
Route::get('/users/{user}/confirm-email/{token}', 'UserEmailConfirmationController@confirm')->name('confirm-email');