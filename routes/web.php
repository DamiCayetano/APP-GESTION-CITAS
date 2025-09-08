<?php

use App\Http\Controllers\Api\PatientsController;
use App\Http\Controllers\Api\DoctorsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/login', function () {
    return view('login');
});

Route::get('/system', function () {
    return view('system');
});
=======
Route::resource('patients', PatientsController::class);
Route::resource('doctors', DoctorsController::class);

>>>>>>> 2321212650054e0fd57eb7f0ee8ccb6946dddc63
