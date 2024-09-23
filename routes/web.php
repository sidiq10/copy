<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;

Route::get('admin/product',[AdminProductController::class,'index']);
Route::get('admin/product/create',[AdminProductController::class,'create']);
Route::get('admin/product/store',[AdminProductController::class,'store']);
Route::get('admin/product/edit/{id}',[AdminProductController::class,'edit']);
Route::get('admin/product/update',[AdminProductController::class,'update']);
Route::get('admin/product/destroy{id}',[AdminProductController::class,'destroy-']);

Route::get('', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/product', function () {
    return view('product');
});

