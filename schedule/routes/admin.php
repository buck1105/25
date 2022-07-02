<?php

use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\SpecialistController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checklogin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'doctor', 'as' => 'doctor.'], function () {
        Route::get('/', [DoctorController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'calender', 'as' => 'calender.'], function () {
        Route::get('/', function () {
            return view('admin.calender.index');
        })->name('index');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'specialist', 'as' => 'specialist.'], function () {
        Route::get('/', [SpecialistController::class, 'index'])->name('index');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

