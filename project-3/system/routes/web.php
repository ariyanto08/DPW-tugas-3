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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('template.home');
});

Route::get('shop', function () {
    return view('template.shop');
});

Route::get('blog', function () {
    return view('template.blog');
});

Route::get('about', function () {
    return view('template.about');
});

Route::get('contact', function () {
    return view('template.contact');
});

Route::get('cart', function () {
    return view('template.cart');
});

Route::get('product-detail', function () {
    return view('template.product-detail');
});

Route::get('shoping-cart', function () {
    return view('template.shoping-cart');
});

Route::get('login', function () {
    return view('template.login');
});

Route::get('signup', function () {
    return view('template.signup');
});

Route::get('base', function () {
    return view('admin.base');
});

Route::get('dashboard', function () {
    return view('admin.section.dashboard');
});

Route::get('product', function () {
    return view('admin.section.product');
});

Route::get('discount', function () {
    return view('admin.section.discount');
});