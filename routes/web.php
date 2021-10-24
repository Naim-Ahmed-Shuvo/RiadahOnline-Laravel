<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ServiceController;
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

Route::get('/',[HomeController::class,'index']);
Route::post('/submit',[HomeController::class,'index']);
Route::view('about', 'web.about')->name('about');
Route::view('partners', 'web.partners')->name('pertners');
Route::view('detailspage', 'web.details');
Route::view('contact', 'web.contact')->name('contact');

// service
Route::match(['get', 'post'], 'servicepage/{cat_id?}',[ServiceController::class,'index']);
Route::match(['get','post'],'service-details/{id?}/{cat_id?}', [ServiceController::class,'serviceDetails'])->name('service.details');

// cart
Route::match(['get','post'],'cart', [CartController::class,'index']);
Route::match(['get','post'],'shop-page', [CartController::class,'viewShopPage']);


// contact from
Route::post('submit-form', [HomeController::class,'submit'])->name('submit.form');



require __DIR__.'/auth.php';
// require __DIR__.'/admin.php';
