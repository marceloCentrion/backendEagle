<?php

namespace App\Http\Controllers;

use App\Models\GruposMusculares;
use Illuminate\Http\Request;

class GruposMuscularesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gruposMusculares = GruposMusculares::all();
        return response()->json($gruposMusculares, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nome"=> "required|string|max:200|",
            "academia_id"=> "required|string|exists:academias,id",
            "interno"=> "required|in:SIM,NAO",
        ]);
        $grupoMuscular = GruposMusculares::create($request->all());
        return response()->json($grupoMuscular, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grupoMuscular = GruposMusculares::find($id);
        if(!$grupoMuscular){
            return response()->json(['message'=> 'Grupo muscular não encontrado'], 404);
        }
        return response()->json($grupoMuscular, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nome"=> "sometimes|string|max:200|",
            "academia_id"=> "sometimes|string|exists:academias,id",
            "interno"=> "sometimes|in:SIM,NAO",
        ]);
        $grupoMuscular = GruposMusculares::find($id);
        if(!$grupoMuscular){
            return response()->json(['message'=> 'Grupo muscular não encontrado'], 404);
        }
        $grupoMuscular->update($request->all());
        return response()->json($grupoMuscular, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grupoMuscular = GruposMusculares::find($id);
        if(!$grupoMuscular){
            return response()->json(['message'=> 'Grupo muscular não encontrado'], 404);
        }
        $grupoMuscular->delete();
        return response()->json("Grupo muscular excluído com sucesso", 200);
    }
}
