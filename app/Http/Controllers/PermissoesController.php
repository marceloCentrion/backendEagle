<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissoesRequest;
use App\Http\Resources\PermissoesResource;
use App\Models\Permissao;
use Illuminate\Http\Request;

class PermissoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissoes = PermissoesResource::collection(Permissao::all());
        return response()->json($permissoes, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissoesRequest $request)
    {
        $data = $request->validated();
        $permissao = Permissao::create($data);
        return response()->json($permissao, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $permissao = Permissao::findOrFail($id);
        if (!$permissao) {
            return response()->json(['message' => 'Permissão não encontrada'], 404);
        }
        return response()->json(new PermissoesResource($permissao), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissoesRequest $request, string $id)
    {
        $permissao = Permissao::findOrFail($id);
        if (!$permissao) {
            return response()->json(['message' => 'Permissão não encontrada'], 404);
        }
        $data = $request->validated();
        $permissao->update($data);
        return response()->json($permissao, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permissao = Permissao::findOrFail($id);
        if (!$permissao) {
            return response()->json(['message' => 'Permissão não encontrada'], 404);
        }
        $permissao->delete();
        return response()->json("Permissao excluída com sucesso!", 200);
    }
}
