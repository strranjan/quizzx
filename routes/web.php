<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Frontend controller all website Route here
Route::get('/' , [FrontendController::class , 'landingPageIndex']);

// Route::get('/', function () {
//     return view('frontend.welcome');
// });
Route::get('/admin', [Controller::class, 'login']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
require __DIR__.'/auth.php';


// Admin User
Route::get('/admin/users' , [UsersController::class , 'getAllUser']);