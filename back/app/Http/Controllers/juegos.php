<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class juegos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo($request->get('nombre'));
        $juego=new Juego();
        $juego->id=null;
        $juego->nombre= $request->get('nombre');
        $juego->genero= $request->get('genero');
        $juego->descripcion= $request->get('desc');
        $juego->ano_publicacion= $request->get('año');
        $juego->desarrolladora_id= $request->get('desa');
        $juego->grupo_traduccion= $request->get('grupo_tra');

        $juego->save();
        return redirect('/dash');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
