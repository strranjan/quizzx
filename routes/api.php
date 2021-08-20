<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\Admin\UsersController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->group(function(){
    // Route::post('/user/register' , [ApiAuthController::class , 'userRegister']);
    Route::post('/user/login' , [ApiAuthController::class , 'userLogin']);
    Route::post('/user/logout' , [ApiAuthController::class , 'logout']);
});

Route::post('/user/register' , [ApiAuthController::class , 'userRegister']);


// Route::post('/user/register' , [ApiAuthController::class , 'userRegister']);
// Route::post('/user/login' , [ApiAuthController::class , 'userLogin']);
// Route::post('/user/logout' , [ApiAuthController::class , 'logout']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin

Route::get('/admin/users' , [UsersController::class , 'getAllUser']);


