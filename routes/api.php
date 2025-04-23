<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\SpecialityController;
use App\Http\Controllers\Dashboard\DoctorTitleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('countries', CountryController::class);
Route::apiResource('doctor_titles', DoctorTitleController::class);
Route::apiResource('specialities', SpecialityController::class);
