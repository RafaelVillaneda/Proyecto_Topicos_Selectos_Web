<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware('web')->get('/', function() {
    session()->put('logeado', true);
    error_log('Logeado desde web.php->' . session()->get('logeado'));
    if (session()->has('logeado') && session('logeado') === true) {
        error_log('Variable de logeo correcta');
        return view('welcome');
    } else {
        error_log('La variable de logeo no existe o no es true');
        return redirect('http://localhost:3000');
    }
});

Route::middleware('web')->get('/cerrarSesion', function() {
    session()->put('logeado', false);
    //error_log('Logeado->' . session()->get('logeado'));
    return redirect('http://localhost:3000');
});

Route::middleware('web')->controller(UserController::class)->group(function(){
    Route::get('/usuario/{email}/{password}','show');
    Route::post('/usuario','store');
    Route::delete('/usuario/{id}','destroy');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/
