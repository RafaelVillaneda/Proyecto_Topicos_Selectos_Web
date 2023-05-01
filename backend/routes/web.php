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
Route::middleware('web')->get('/',function(){
    if(session()->exists('logeado') && session()->get('logeado')==true){
            session()->put('logeado',false);
            return view('welcome');
        return redirect('http://localhost:3000');
    }else{
        return redirect('http://localhost:3000');
    }
    //return view('welcome');
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
