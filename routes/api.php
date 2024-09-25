<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

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


//READ
Route::get('students', [StudentController::class, 'index']);
Route::get('showstudents/{student}', [StudentController::class, 'show']);

//CREATE
Route::post('addstudents', [StudentController::class, 'store']);

//UPDATE
Route::put('updatestudents/{student}', [StudentController::class, 'update']);

//DELETE
Route::delete('deletestudents/{student}', [StudentController::class, 'destroy']);
