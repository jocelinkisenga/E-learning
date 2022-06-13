<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
//});


//course routes
Route::get('/course',[App\Http\Controllers\CourseController::class, 'index']);
Route::post('/course',[App\Http\Controllers\CourseController::class, 'store']);
Route::get('/course/{id}',[App\Http\Controllers\CourseController::class, 'show']);

//chapter routes
Route::get('/chapter',[App\Http\Controllers\ChapterController::class, 'index']);
Route::post('/chapter',[App\Http\Controllers\ChapterController::class, 'store']);
Route::get('/chapter/{id}',[App\Http\Controllers\ChapterController::class, 'show']);

// kit course routes
Route::get('/kit',[App\Http\Controllers\KitCourseController::class, 'index']);
Route::post('/kit/{id}',[App\Http\Controllers\KitCourseController::class, 'store']);

// user routes
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/user', [App\Http\Controllers\ProfileController::class, 'user_courses']);
Route::post('/me', [App\Http\Controllers\AuthController::class, 'me'])->middleware('auth:sanctum');
