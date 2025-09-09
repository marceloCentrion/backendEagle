<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Estado::all();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:200',
            'estado' => 'required|string|max:200',
            'sigla' => 'required|string|max:2',
            'creator'=> 'nullable|string|max:200',
            'slug'=> 'nullable|string|max:200',
        ]);
        $estados = Estado::create($request->all());
        return response()->json($estados, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estados = Estado::find($id);
        if (!$estados) {
            return response()->json(['message' => 'Estado nao encontrado'], 404);
        }
        return response()->json($estados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estados = Estado::find($id);   
        $request->validate([
            'codigo' => 'sometimes|required|string|max:200',
            'estado' => 'sometimes|required|string|max:200',
            'sigla' => 'sometimes|required|string|max:2',
            'creator'=> 'nullable|string|max:200',
            'slug'=> 'nullable|string|max:200',
        ]);
        if (!$estados) {
            return response()->json(['message' => 'Estado nao encontrado'], 404);
        }
        $estados->update($request->all());
        return response()->json($estados, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estados = Estado::find($id);
        if (!$estados) {
            return response()->json(['message' => 'Estado nao encontrado'], 404);
        }
        $estados->delete();
        return response()->json("Estado deletado com sucesso", 200);
    }
}
