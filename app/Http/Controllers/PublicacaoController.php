<?php

namespace App\Http\Controllers;

use App\Http\Requests\Publicacao\StorePublicacaosRequest;
use App\Http\Requests\Publicacao\UpdatePublicacaosRequest;
use App\Http\Resources\PublicacaosResource;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PublicacaosResource::collection(Publicacao::all());
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicacaosRequest $request)
    {
        $data = $request->validated();
        $publicacao = Publicacao::create($data);
        return response()->json($publicacao, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publicacao = Publicacao::findOrFail($id);
        if (!$publicacao) {
            return response()->json(['message' => 'Publicacao não encontrado'], 404);
        }
        return response()->json($publicacao, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicacaosRequest $request, string $id)
    {
        $publicacao = Publicacao::findOrFail($id);
        if (!$publicacao) {
            return response()->json(['message' => 'Publicacao não encontrado'], 404);
        }
        $data = $request->validated();
        $publicacao->update($data);
        return response()->json($publicacao, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publicacao = Publicacao::findOrFail($id);
        if (!$publicacao) {
            return response()->json(['message' => 'Publicacao não encontrado'], 404);
        }
        $publicacao->delete();
        return response()->json("Publicacao excluída com sucesso", 200);
    }
}
