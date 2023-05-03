<?php

use App\Http\Controllers\desarrolladora as ControllersDesarrolladora;
use Illuminate\Support\Facades\Route;
use App\Models\Juego;
use App\Models\Desarrolladora;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dash', function () {
        $juegos = Juego::all();
        $desarrolladoras = Desarrolladora::all();
        return view('dash.index', ['juegos' => $juegos,'desa'=>$desarrolladoras]);
    })->name('dashboard');
    
    Route::get('/dash/juegos', function () {
        $juegos = Juego::all();
        return view('dash.juegos',['juegos' => $juegos]);
    })->name('dashboard');

    Route::get('/dash/desarrolladora', function () {
        $desa=Desarrolladora::all();

        return view('dash.desarrolladora');
    })->name('dashboard');

    //CRUD
    Route::resource('juegos','App\Http\Controllers\juegos');
});
