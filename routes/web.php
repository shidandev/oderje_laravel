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

Route::get('/', 'LandingPageController@index')->name('landing-page');

//Shop Page
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

//Search
Route::get('/search', 'ShopController@search')->name('search');

//Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
// Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

// Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
// Route::patch('/my-profile', 'UsersController@update')->name('users.update');

// Route::get('/cart', 'CartController@index')->name('cart.index');
// Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
// Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
// Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

// Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
// Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');

// Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
// Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

//Route::middleware('auth')->group(function (){
    // Route::get('/wallet', 'WalletController@index')->name('wallet.index');
//});

Auth::routes();

// Authentication Routes...
// Route::get('login', 'Auth\CustomLoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\CustomLoginController@authenticate')->name('login.user');
// Route::post('logout', 'Auth\CustomLoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\CustomRegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\CustomRegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\CustomForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\CustomForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\CustomResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\CustomResetPasswordController@reset')->name('password.update');

// // Email Verification Routes...
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
// /* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');




