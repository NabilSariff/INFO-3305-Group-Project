<?php

use App\Http\Controllers\UserController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});

Route::get('/products', function(){
    return view('products');
});



Route::post('/contact/submit', 'MessagesController@submit');

Route::post("/",[UserController::class,'login']);

 
