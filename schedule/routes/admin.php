<?php

use Illuminate\Support\Facades\Route;

Route::get('/doctor', function () {
    return view('admin.doctor.index');
})->name('doctor');
