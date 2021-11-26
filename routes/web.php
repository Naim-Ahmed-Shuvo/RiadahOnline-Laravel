<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/submit',[HomeController::class,'index']);
Route::view('about', 'web.about')->name('about');
Route::view('partners', 'web.partners')->name('pertners');
Route::view('detailspage', 'web.details');
Route::view('contact', 'web.contact')->name('contact');

// service
Route::match(['get', 'post'], 'servicepage/{cat_id?}',[ServiceController::class,'index']);
Route::match(['get','post'],'service-details/{id?}/{cat_id?}', [ServiceController::class,'serviceDetails'])->name('service.details');
Route::match(['get','post'],'get_tabdata/{tab}/{service_id}', [ServiceController::class,'getTabData']);

// cart
Route::match(['get','post'],'cart', [CartController::class,'index']);
Route::match(['get','post'],'shop-page', [CartController::class,'viewShopPage']);
Route::match(['get','post'],'place-order/{id}', [CartController::class,'addToCart']);
Route::match(['get','post'],'destroy/cart', [CartController::class,'removeCart']);
Route::match(['get','post'],'increase_qty/{rowId}', [CartController::class,'increaseQty']);
Route::match(['get','post'],'decrease_qty/{rowId}', [CartController::class,'decreaseQty']);

//checkout
Route::get('shop-page', [OrdersController::class,'index'])->name('shop.page');
Route::post('store-order', [OrdersController::class,'storeOrder'])->name('store.order');
Route::get('order-success', [OrdersController::class,'orderSuccess'])->name('order.success');

// contact from
Route::post('submit-form', [HomeController::class,'submit'])->name('submit.form');




require __DIR__.'/auth.php';
