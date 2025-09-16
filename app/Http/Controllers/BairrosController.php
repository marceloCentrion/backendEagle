<?php

namespace App\Http\Controllers;

use App\Models\Bairros;
use Illuminate\Http\Request;

class BairrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bairros = Bairros::all();
        return response()->json($bairros, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "bairro"=> "required|string|max:200",
            "cidade_id"=> "required|string|exists:cidades,id",
        ]);
        $bairro = Bairros::create($request->all());
        return response()->json($bairro, 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bairro = Bairros::find($id);
        if(!$bairro){
            return response()->json(['message'=> 'Bairro não encontrado'], 404);
        }
        return response()->json($bairro, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "bairro"=> "sometimes|string|max:200",
            "cidade_id"=> "sometimes|string|exists:cidades,id",
        ]);
        $bairro = Bairros::find($id);
        if(!$bairro){
            return response()->json(['message'=> 'Bairro não encontrado'], 404);
        }
        $bairro->update($request->all());
        return response()->json($bairro, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bairro = Bairros::find($id);
        if(!$bairro){
            return response()->json(['message'=> 'Bairro não encontrado'], 404);
        }
        $bairro->delete();
        return response()->json("Bairro excluído com sucesso", 200);
    }
}
