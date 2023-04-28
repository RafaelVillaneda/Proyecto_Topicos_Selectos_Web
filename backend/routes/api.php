<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/react', function () {
    return redirect('http://localhost:3000');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/usuario/{email}','show');
    Route::post('/usuario','store');
    Route::delete('/usuario/{id}','destroy');
});
