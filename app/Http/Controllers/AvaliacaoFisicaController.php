<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvaliacaoFisica\StoreAvaliacaoFisicaRequest;
use App\Http\Requests\AvaliacaoFisica\UpdateAvaliacaoFisicaRequest;
use App\Http\Resources\AvalicacaoFisicaResource;
use App\Models\AvaliacaoFisica;
use Illuminate\Http\Request;

class AvaliacaoFisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avaliacaoFisicas = AvaliacaoFisica::paginate(10);
        return AvalicacaoFisicaResource::collection($avaliacaoFisicas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAvaliacaoFisicaRequest $request)
    {
        $data = $request->validated();
        $avaliacaoFisica = AvaliacaoFisica::create($data);
        return response()->json(new AvalicacaoFisicaResource($avaliacaoFisica), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $avaliacaoFisica = AvaliacaoFisica::find($id);
        if(!$avaliacaoFisica){
            return response()->json(['message' => 'Avaliação Física não encontrada.'], 404);
        }
        return response()->json(new AvalicacaoFisicaResource($avaliacaoFisica));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAvaliacaoFisicaRequest $request, string $id)
    {
        $avaliacaoFisica = AvaliacaoFisica::find($id);
        if(!$avaliacaoFisica){
            return response()->json(['message' => 'Avaliação Física não encontrada.'], 404);
        }
        $data = $request->validated();
        $avaliacaoFisica->update($data);
        return response()->json(new AvalicacaoFisicaResource($avaliacaoFisica));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $avaliacaoFisica = AvaliacaoFisica::find($id);
        if(!$avaliacaoFisica){
            return response()->json(['message' => 'Avaliação Física não encontrada.'], 404);
        }
        $avaliacaoFisica->delete();
        return response()->json("Avaliação Fisíca excluída com sucesso", 200);
    }
}
