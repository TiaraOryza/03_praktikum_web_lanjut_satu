<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::prefix('product')->group(function(){
    Route::get('/1', function () {
        return view('product1');
    });  
});

Route::get('/news/{id}', function ($id){
    return view('news',['nomor' => $id]);
});

Route::get('/program', function (){
    return view('program');
});

Route::get('/about-us', function (){
    return view('about-us');
});

Route::resource('contact-us', ContactUs::class);