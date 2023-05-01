<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


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
/*
Route::middleware(['web', StartSession::class])->group(function() {
    Route::controller(UserController::class)->group(function(){
        Route::get('/usuario/{email}/{password}','show');
        Route::post('/usuario','store');
        Route::delete('/usuario/{id}','destroy');
    });
});
*/

Route::middleware('web')->controller(UserController::class)->group(function(){
    Route::get('/usuario/{email}/{password}','show');
    Route::post('/usuario','store');
    Route::delete('/usuario/{id}','destroy');
});



