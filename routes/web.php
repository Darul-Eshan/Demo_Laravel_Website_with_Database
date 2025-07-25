<?php


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
