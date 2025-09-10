<?php

namespace App\Http\Controllers;

use App\Http\Requests\FabricanteRequest;
use App\Http\Resources\FabricanteResource;
use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fabricantes = FabricanteResource::collection(Fabricante::all());
        return response()->json($fabricantes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FabricanteRequest $request)
    {
        $data = $request->validated();
        $fabricante = Fabricante::create($data);
        return response()->json($fabricante, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fabricantes = Fabricante::findOrFail($id);
        if(!$fabricantes){
            return response()->json(['message' => 'Fabricante nao encontrado'], 404);
        }
        $resource = new FabricanteResource($fabricantes);
        return response()->json($resource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fabricante = Fabricante::find($id);
        if (!$fabricante) {
            return response()->json(['message' => 'Fabricante nao encontrado'], 404);
        }
        $fabricante->update($request->all());
        return response()->json($fabricante);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fabricante = Fabricante::find($id);
        if (!$fabricante) {
            return response()->json(['message' => 'Fabricante nao encontrado'], 404);
        }
        $fabricante->delete();
        return response()->json("Fabricante excluído com sucesso", 200);
    }
}
