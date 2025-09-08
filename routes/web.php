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
Route::resource('doctors', DoctorsController::class);
Route::resource('quotes', QuotesController::class);