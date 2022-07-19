<?php

use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\SpecialistController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'checklogin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'doctor', 'as' => 'doctor.'], function () {
        Route::get('/', [DoctorController::class, 'index'])->name('index');
        Route::get('create', [DoctorController::class, 'create'])->name('create');
        Route::post('store', [DoctorController::class, 'store'])->name('store');
        Route::get('edit/{id}', [DoctorController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [DoctorController::class, 'update'])->name('update');
        Route::get('delete/{id}', [DoctorController::class, 'delete'])->name('delete');
        Route::post('import', [DoctorController::class, 'import'])->name('import');
        Route::get('export', [DoctorController::class, 'exportDoctor'])->name('export');
    });

    Route::group(['prefix' => 'calender', 'as' => 'calender.'], function () {
        Route::get('/', function () {
            return view('admin.calender.index');
        })->name('index');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

    });

    Route::group(['prefix' => 'client', 'as' => 'client.'], function () {
Route::get('/', [ClientController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'specialist', 'as' => 'specialist.'], function () {
        Route::get('/', [SpecialistController::class, 'index'])->name('index');
        Route::get('/create', [SpecialistController::class, 'create'])->name('create');
        Route::post('/store', [SpecialistController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SpecialistController::class, 'edit'])->name('edit');
        Route::post('/update', [SpecialistController::class, 'update'])->name('update');
        Route::get('delete/{id}', [SpecialistController::class, 'destroy'])->name('destroy');
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

