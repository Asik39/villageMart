<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\sidebarController;
use App\Http\Controllers\Admin\adminController;
 
Route::get('/', [homeController::class, 'homeindex']);
Route::get('/trackOrder', [homeController::class, 'orderTrack']);
Route::get('/myAccount', [userController::class, 'myAccount']);
Route::get('/register', [userController::class, 'register']);
Route::get('/forgetPassword', [userController::class, 'forgetPassword']);
Route::get('/whisList', [homeController::class, 'whisList']);
Route::get('/productView', [homeController::class, 'productView']);
Route::get('/category', [sidebarController::class, 'getCatData']);
Route::post('/signup', [userController::class, 'signup']);
Route::post('/login', [userController::class, 'login']);

// Admin

Route::get('/admin', [adminController::class, 'index']);






