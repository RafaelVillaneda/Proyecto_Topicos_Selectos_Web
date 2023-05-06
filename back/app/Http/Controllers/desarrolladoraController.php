<?php

namespace App\Http\Controllers;

use App\Models\Desarrolladora;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class desarrolladoraController extends Controller
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
            $desa = new Desarrolladora();
            echo ($request->get('nombre'));
            $desa->id = null;
            $desa->nombre_desarrolladora = $request->get('nombre_desa');

            $desa->save();
            return redirect('/dash/desarrolladora')->with('agregado', 'Registro creado satisfactoriamente.');
        } catch (\Throwable $th) {
            return redirect('/dash/desarrolladora')->with('ErrorAgregado', 'La insercion no pudo efectuarse');
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
