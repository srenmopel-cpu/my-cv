<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;

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
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/skills', [SkillsController::class, 'index']);
Route::get('/education', [EducationController::class, 'index']);
Route::get('/experience', [ExperienceController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);