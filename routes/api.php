<?php

use App\Http\Controllers\Api\PatientsController;
use App\Http\Controllers\Api\DoctorsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('patients', PatientsController::class);
Route::apiResource('doctors', DoctorsController::class);

