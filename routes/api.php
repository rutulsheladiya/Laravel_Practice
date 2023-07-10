<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

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

// Route for fetch all data
Route::get('personaldata',[PersonalController::class,'Index']);

// Insert Data
Route::post('personaldata',[PersonalController::class,'store']);

// show() - show single record
Route::get('personaldata/{id}',[PersonalController::class,'Show']);

//edit (when click on edit button data refill in form)
Route::get('personaldata/{id}/edit',[PersonalController::class,'edit']);

// update record
Route::put('personaldata/{id}/edit',[PersonalController::class,'update']);

//delete data
Route::delete('personaldata/{id}',[PersonalController::class,'delete']);
