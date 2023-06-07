<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ImageController;
use App\Http\Middleware\caestmiddleware;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

require_once'api/authentication.php';
require_once'api/user.php';
require_once'api/rejistration.php';
require_once'api/course.php';
require_once'api/Institute.php';


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*Route::middleware(caestmiddleware::class)->group(function()
{
Route::post('image',[ImageController::class, 'imageStore']);
});*/
