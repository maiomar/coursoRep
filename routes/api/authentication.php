<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\caestmiddleware;
use App\Http\Controllers\Api\Authenticationcontroller;

Route::middleware(caestmiddleware::class)->group(function()
{
Route::post('/login',[App\Http\Controllers\Api\Authenticationcontroller::class,'login']);
Route::post('/register',[App\Http\Controllers\Api\Authenticationcontroller::class,'register']);

});
Route::middleware('auth:sanctum')->post('/logout',[App\Http\Controllers\Api\Authenticationcontroller::class,'logout']);

