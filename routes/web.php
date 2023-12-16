<?php

use App\Http\Controllers\frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/team', [TeamController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
