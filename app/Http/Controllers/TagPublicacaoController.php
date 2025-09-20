<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagPublicacao\StoreTagPublicacaoRequest;
use App\Http\Requests\TagPublicacao\UpdateTagPublicacaoRequest;
use App\Http\Resources\TagPublicacaoResource;
use App\Models\TagPublicacao;
use Illuminate\Http\Request;

class TagPublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TagPublicacaoResource::collection(TagPublicacao::all());
        return response()->json( $data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagPublicacaoRequest $request)
    {
        $data = $request->validated();
        $tagPublicacao = TagPublicacao::create($data);
        return response()->json( $tagPublicacao, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tagPublicacao = TagPublicacao::findOrFail($id);
        if ($tagPublicacao) {
            return response()->json( new TagPublicacaoResource($tagPublicacao), 200);
        } else {
            return response()->json(['message' => 'Tag não encontrada'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagPublicacaoRequest $request, string $id)
    {
        $tagPublicacao = TagPublicacao::findOrFail($id);
        if ($tagPublicacao) {
            $tagPublicacao->update($request->validated());
            return response()->json( $tagPublicacao, 200);
        } else {
            return response()->json(['message' => 'Tag não encontrada'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tagPublicacao = TagPublicacao::findOrFail($id);
        if ($tagPublicacao) {
            $tagPublicacao->delete();
            return response()->json(['message' => 'Tag deletada com sucesso'], 200);
        } else {
            return response()->json(['message' => 'Tag não encontrada'], 404);
        }
    }
}
