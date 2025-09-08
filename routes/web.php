<?php

use App\Http\Controllers\Api\PatientsController;
use App\Http\Controllers\Api\DoctorsController;
use App\Http\Controllers\Api\QuotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/system', function () {
    return view('system');
});

Route::resource('patients', PatientsController::class);
<<<<<<< HEAD
Route::resource('doctors', DoctorsController::class);
Route::resource('quotes', QuotesController::class);
=======
Route::resource('doctors', DoctorsController::class);
>>>>>>> 6bb3d8611ae1c7dde370bca16871ab470e2df396
