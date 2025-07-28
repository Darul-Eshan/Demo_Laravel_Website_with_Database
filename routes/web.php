<?php

<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'index'])->name('home');;
 Route::get('/about',[HomeController::class,'about'])->name('about');
 Route::get('/contact',[HomeController::class,'contact'])->name('contact');
=======

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//
//    return view('home');
//
//});
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);




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
>>>>>>> 941f5ebaf049940d95e4cd6bf41f804d28cf2b28
