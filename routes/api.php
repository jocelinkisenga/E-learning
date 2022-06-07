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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/course',[App\Http\Controllers\CourseController::class, 'index']);
Route::post('/course',[App\Http\Controllers\CourseController::class, 'store']);
Route::get('/course/{id}',[App\Http\Controllers\CourseController::class, 'show']);

Route::get('/chapter',[App\Http\Controllers\ChapterController::class, 'index']);
Route::post('/chapter',[App\Http\Controllers\ChapterController::class, 'store']);
Route::get('/chapter/{id}',[App\Http\Controllers\ChapterController::class, 'show']);
