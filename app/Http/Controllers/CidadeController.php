<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidade = Cidade::all();
        return response()->json($cidade,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:200',
            'estado_id' => 'required|integer|exists:estados,id',
        ]);

        $cidade = Cidade::create($request->all());
        return response()->json($cidade, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cidade = Cidade::find($id);
        if (!$cidade) {
            return response()->json(['message' => 'Cidade nao encontrada'], 404);
        }
        return response()->json($cidade, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'sometimes|required|string|max:200',
            'estado_id' => 'sometimes|required|integer|exists:estados,id',
        ]);
        $cidade = Cidade::find($id);
        if (!$cidade) {
            return response()->json(['message' => 'Cidade nao encontrada'], 404);
        }
        $cidade->update($request->all());
        return response()->json($cidade, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cidade = Cidade::find($id);
        if(!$cidade){
            return response()->json(['message' => 'Cidade não encontrada', 404]);
        }
        $cidade->delete();
        return response()->json("Cidade excluída com sucesso",200);
    }
}
