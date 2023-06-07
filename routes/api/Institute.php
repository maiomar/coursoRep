<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InstituteController;

// Institutes
Route::get('/Institutes', [InstituteController::class,'Institutes']);
// Institutes_all
Route::get('/Institutes_all', [InstituteController::class,'Institutes_all']);
//معلومات المعهد
Route::apiResource('/Institute', InstituteController::class);
