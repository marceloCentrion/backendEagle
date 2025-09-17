<?php

namespace App\Http\Controllers;

use App\Http\Requests\Treino\StoreTreinoRequest;
use App\Http\Requests\Treino\UpdateTreinoRequest;
use App\Http\Resources\TreinoResource;
use App\Models\Treino;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TreinoResource::collection(Treino::all());
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTreinoRequest $request)
    {
        $data = $request->validated();
        $treino = Treino::create($data);
        return response()->json($treino, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $treino = Treino::findOrFail($id);
        if (!$treino) {
            return response()->json(['message' => 'Treino não encontrado'], 404);
        }
        return response()->json($treino, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTreinoRequest $request, string $id)
    {
        $treino = Treino::findOrFail($id);
        if (!$treino) {
            return response()->json(['message' => 'Treino não encontrado'], 404);
        }
        $treino->update($request->validated());
        return response()->json($treino, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treino = Treino::findOrFail($id);
        if (!$treino) {
            return response()->json(['message' => 'Treino não encontrado'], 404);
        }
        $treino->delete();
        return response()->json("Treino excluído com sucesso", 200);
    }
}
