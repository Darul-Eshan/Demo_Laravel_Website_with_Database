<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//
//    return view('home');
//
//});
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/contact',[ContactController::class,'contact']);


//Route::get('/about', function () {
//
//    return view('about');
//
//});
//
//Route::get('/contact', function () {
//
//    return view('contact');
//
//});
