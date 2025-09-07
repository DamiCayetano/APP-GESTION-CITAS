<?php

use App\Http\Controllers\Api\PatientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patients', PatientsController::class);
