<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\faculty_memberController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UserController;


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('general',GeneralController::class);
Route::resource('slider',SliderController::class);
Route::resource('service',ServiceController::class);
Route::resource('news',NewsController::class);
Route::resource('facultymember',faculty_memberController::class);
Route::resource('brands',BrandController::class);
Route::resource('gallery',GalleryController::class);
Route::resource('message',MessageController::class);
Route::resource('roles',RolesController::class);
Route::resource('user',UserController::class);

