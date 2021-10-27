<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>'auth'],function () {

    Route::get('/admin',[AdminController::class,'index'])->name('admin');

    // service
    Route::resource('service',ServiceController::class);
    Route::post('service/update/{id}',[ServiceController::class,'update']);
    Route::get('service/delete/{id}',[ServiceController::class,'destroy']);

    //category
    Route::resource('category',CategoryController::class);

    // profile
    Route::get('profile',[ProfileController::class,'index'])->name('admin.profile');
    Route::get('profile-view',[ProfileController::class,'profileview']);
    Route::post('profile-update',[ProfileController::class,'update'])->name('profile.update');

    //user
    Route::get('/getuserbyid/{id}',[UserController::class,'getUser']);
    Route::post('/updateuser/{id}',[UserController::class,'updateUser']);
    Route::post('/storeuser',[UserController::class,'storeUser']);
    Route::post('/deleteuser/{id}',[UserController::class,'deleteUser']);

    //slider
    Route::get('slider',[SliderController::class,'index']);
    Route::post('saveslider',[SliderController::class,'store']);
    Route::get('fetchslider',[SliderController::class,'fetchslider']);
    Route::get('edit-slider/{id}',[SliderController::class,'editSlider']);
    Route::post('updateslider',[SliderController::class,'updateSlider']);
    Route::post('deleteSlider/{id}',[SliderController::class,'deleteSlider']);
});
