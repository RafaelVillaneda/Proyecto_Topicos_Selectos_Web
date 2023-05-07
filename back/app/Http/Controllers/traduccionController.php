<?php

namespace App\Http\Controllers;

use App\Models\grupotraduccion;
use Illuminate\Http\Request;

class traduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try {
            $trad = new grupotraduccion();
            //echo ($request->get('nombre_desa'));
            $trad->id = null;
            $trad->nombre_grupo = $request->get('nombre_tra');

            $trad->save();
            return redirect('/dash/traductores')->with('agregado', 'Registro creado satisfactoriamente.');
        } catch (\Throwable $th) {
            return redirect('/dash/traductores')->with('ErrorAgregado', 'La insercion no pudo efectuarse');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        try {
            $id = $request->input('id');
            $desa = grupotraduccion::findOrFail($id);
            $desa->nombre_grupo = $request->input('nombre_tra');
            $desa->save();
            return redirect('/dash/traductores')->with('modificado', 'Registro modificado satisfactoriamente.');
        } catch (\Throwable $e) {
            return redirect('/dash/traductores')->with('modificado', 'Registro NO modificado satisfactoriamente verifica y vuelve a intentar.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = grupotraduccion::find($id);
        if (!$registro) {
            return redirect('/dash/traductores')->with('elimiadoCorrecto', 'El registro no pudo ser elimiando posiblemente ya no existe');
        }
        $registro->delete();
        //dd("Registro eliminado satisfactoria mente");
        return redirect('/dash/traductores')->with('elimiadoCorrecto', 'Registro eliminado satisfactoriamente.');
    }
}
