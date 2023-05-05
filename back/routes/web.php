<?php

use App\Http\Controllers\desarrolladora as ControllersDesarrolladora;
use Illuminate\Support\Facades\Route;
use App\Models\Juego;
use App\Models\Desarrolladora;
use App\Models\grupotraduccion;

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
        $desa=Desarrolladora::all();
        return view('dash.index', ['juegos' => $juegos,'desa'=>$desarrolladoras,'desa'=>$desa]);
    })->name('dashboard');
    
    Route::get('/dash/juegos', function () {
        $desarrolladoras = Desarrolladora::all();
        $juegos = Juego::all();
        $data = grupotraduccion::all();
        return view('dash.juegos',['juegos' => $juegos,'desa'=>$desarrolladoras,'traductores' => $data]);
    })->name('dashboard');

    Route::get('/dash/traductores', function () {
        $data = grupotraduccion::all();
        return view('dash.grupoTraduccion',['traductores' => $data]);
    })->name('dashboard');

    Route::get('/dash/desarrolladora', function () {
        $desa=Desarrolladora::all();
        return view('dash.desarrolladora',['desa'=>$desa]);
    })->name('dashboard');

    //CRUD
    //Altas
    Route::resource('juegos','App\Http\Controllers\juegos');
    //Cambios
    //Route::put('/juegos/{id}', 'App\Http\Controllers\juegos@update');

});
