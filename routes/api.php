<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CreditController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\ToplistController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\SubjectApiController;
use App\Http\Controllers\Api\SubjectAttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');
Route::apiResource('schedules', ScheduleController::class)
    ->middleware('auth:sanctum');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('credits', CreditController::class);
});
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('attendances', SubjectAttendanceController::class);
});
Route::apiResource('lessons', LessonController::class);
Route::apiResource('subjects', SubjectApiController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('toplists', ToplistController::class);
