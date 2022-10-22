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



Route::get('index', 'PageController@getTrangChu');

Route::get('product-list/{id}', 'PageController@getProductList');


Route::get('wishlist',function(){
    return view('page.WishList');
});


Route::get('wallet',function(){
    return view('page.Wallet');
});


Route::get('product-detail',function(){
    return view('page.ProductDetail');
});


Route::get('reset-password',function(){
    return view('page.ResetPassword');
});


Route::get('register',function(){
    return view('page.Register');
});

Route::get('login',function(){
    return view('page.Login');
});



Route::get('profile-client',function(){
    return view('page.ProfileClient');
});


Route::get('order-list',function(){
    return view('page.OrderList');
});

Route::get('invoice',function(){
    return view('page.Invoice');
});

Route::get('error',function(){
    return view('page.Error');
});

Route::get('contact',function(){
    return view('page.Contact');
});

Route::get('about',function(){
    return view('page.AboutUs');
});

Route::get('checkout',function(){
    return view('page.Checkout');
});

Route::get('change-password',function(){
    return view('page.ChangePassword');
});

Route::get('blog-list',function(){
    return view('page.BlogList');
});

Route::get('blog-detail',function(){
    return view('page.BlogDetail');
});