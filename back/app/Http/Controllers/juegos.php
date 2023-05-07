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
        $juego = new Juego();
        $juego->id = null;
        $juego->nombre = $request->get('nombre');
        $juego->genero = $request->get('genero');
        $juego->descripcion = $request->get('desc');
        $juego->ano_publicacion = $request->get('año');
        $juego->desarrolladora_id = $request->get('desa');
        $juego->grupotraduccion_id = $request->get('grupo_tra');

        if (empty(trim($juego->nombre)
         && trim($juego->nombre)
         && trim($juego->genero)
         && trim($juego->descripcion))) {
            // el campo está vacío o solo contiene espacios
            return redirect()->back()->with(['errorAgregado' => 'Error el registro no pudo ser creado :(']);
        }

        $juego->save();
        return redirect('/dash/juegos')->with('agregado', 'Registro creado satisfactoriamente.');
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
        try {/*
            echo($request->input('nombre') . " - ");
            echo($request->input('genero') . " - ");
            echo($request->input('desc') . " - ");
            echo($request->input('año') . " - ");
            echo($request->input('desa') . " - ");
            echo($request->input('grupo_tra') . " - ");
            */
            $juego = Juego::findOrFail($id);
            $juego->nombre = $request->input('nombre');
            $juego->genero = $request->input('genero');
            $juego->descripcion = $request->input('desc');
            $juego->ano_publicacion = $request->input('año');
            $juego->desarrolladora_id = $request->input('desa');
            $juego->grupotraduccion_id = $request->input('grupo_tra');
            $juego->save();
            return redirect('/dash/juegos')->with('modificado', 'Registro modificado satisfactoriamente.');
        } catch (\Throwable $e) {
            //dd($e);
            //dd("Error la actualizzacion no pudo ser completada");
            return redirect('/dash/juegos')->with('modificado', 'Registro NO modificado satisfactoriamente.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = Juego::find($id);
        if (!$registro) {
            return redirect('/dash/juegos')->with('elimiadoCorrecto', 'El registro no pudo ser elimiando posiblemente ya no existe');
        }
        $registro->delete();
        //dd("Registro eliminado satisfactoria mente");
        return redirect('/dash/juegos')->with('elimiadoCorrecto', 'Registro eliminado satisfactoriamente.');
    }
}
