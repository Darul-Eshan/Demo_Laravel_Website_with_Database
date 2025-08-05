<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/details/{id}',[HomeController::class,'details'])->name('details');
Route::post('/make-full-name',[HomeController::class,'makeFullName'])->name('makeFullName');
Route::get('/calculator', [HomeController::class, 'showCalculatorForm'])->name('calculator.form');
Route::post('/calculator',[HomeController::class,'calculator'])->name('calculator');
Route::get('/add-product',[ProductController::class,'index'])->name('product.add');
