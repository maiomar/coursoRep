<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\coursecontroller;
Route::get('/course/{name}',[App\Http\Controllers\Api\coursecontroller::class,'show']);
Route::get('/search',[App\Http\Controllers\Api\coursecontroller::class,'search']);

// الدورات الحديثة
Route::get('/last_courses', [coursecontroller::class,'last_courses']);
// كل الدورات الحديثة
Route::get('/last_courses_all', [coursecontroller::class,'last_courses_all']);
// الدورات التي عليها حسم
Route::get('/discounted_courses', [coursecontroller::class,'discounted_courses']);
// كل الدورات التي عليها حسم
Route::get('/discounted_courses_all', [coursecontroller::class,'discounted_courses_all']);
//معلومات الدورة
Route::apiResource('/course', coursecontroller::class);
//الدورات الحالية
Route::get('/nowcourse', [courseController::class,'nowcourse']);
//كل الدورات الحالية
Route::get('/nowcourse_all', [courseController::class,'nowcourse_all']);
//الدورات القادمة
Route::get('/aftercourse', [courseController::class,'aftercourse']);
//كل الدورات القادمة
Route::get('/aftercourse_all', [courseController::class,'aftercourse_all']);
//اقتراح الدورة
Route::post('/suggested_course', [courseController::class,'Suggestions']);
//صورة واسم المستخدم
Route::get('/user', [courseController::class,'user_home']);


