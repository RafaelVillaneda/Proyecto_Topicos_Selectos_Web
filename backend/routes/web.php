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
    //session()->put('logeado', true);
    if (session()->has('logeado') && session('logeado') === true) {
        error_log('Variable de logeo correcta');
        return view('welcome');
    } else {
        error_log('La variable de logeo no existe o no es true');
        return redirect('http://localhost:3000');
    }
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
