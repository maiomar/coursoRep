<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Usercontroller;
Route::middleware('auth:sanctum')->post('/profile/update_profile',[App\Http\Controllers\Api\Usercontroller::class,'update_profile']);
Route::middleware('auth:sanctum')->post('/enrollInCourse/{course_id}',[App\Http\Controllers\Api\Usercontroller::class,'enrollInCourse']);

