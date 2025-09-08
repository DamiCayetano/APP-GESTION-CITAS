<?php

use App\Http\Controllers\Api\DiagnosticsController;
use App\Http\Controllers\Api\PatientsController;
use App\Http\Controllers\Api\DoctorsController;
use App\Http\Controllers\Api\QuotesController;
use App\Http\Controllers\Api\TreatmentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('patients', PatientsController::class);
Route::apiResource('doctors', DoctorsController::class);
Route::apiResource('diagnostics', DiagnosticsController::class);
Route::apiResource('quotes', QuotesController::class);
Route::apiResource('treatments', TreatmentsController::class);

