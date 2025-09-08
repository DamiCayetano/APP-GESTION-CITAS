<?php

use App\Http\Controllers\Api\PatientsController;
use App\Http\Controllers\Api\DoctorsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patients', PatientsController::class);
Route::resource('doctors', DoctorsController::class);

