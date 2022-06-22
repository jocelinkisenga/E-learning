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
Route::get('/course/{id}',[App\Http\Controllers\CourseController::class, 'show']);

//chapter routes
/*Route::get('/chapter',[App\Http\Controllers\ChapterController::class, 'index']);
Route::post('/chapter',[App\Http\Controllers\ChapterController::class, 'store']);
Route::get('/chapter/{id}',[App\Http\Controllers\ChapterController::class, 'show']);*/


// user routes
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::middleware(['auth','permis'])->group(function(){
Route::post('/course',[App\Http\Controllers\CourseController::class, 'store']);
});

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/permissions',[App\Http\Controllers\PermissionController::class, 'store']);
    Route::post('/me', [App\Http\Controllers\AuthController::class, 'me']);
    Route::post('/subscribe/{id}',[App\Http\Controllers\KitCourseController::class, 'store']);
    Route::get('/subscribe',[App\Http\Controllers\KitCourseController::class, 'index']);
    Route::get('/user', [App\Http\Controllers\ProfileController::class, 'user_courses']);
});

Route::middleware(['auth:sanctum','admin'])->group(function(){
    Route::get('/permissions',[App\Http\Controllers\PermissionController::class, 'index']);
    Route::put('/permissions',[App\Http\Controllers\PermissionController::class, 'edit']);
    
});