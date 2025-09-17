<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndicacaoRequest;
use App\Http\Requests\StoreIndicacaoRequest;
use App\Http\Requests\UpdateIndicacaoRequest;
use App\Http\Resources\IndicacaoResource;
use App\Models\Indicacao;
use Illuminate\Http\Request;

class IndicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indicacao = IndicacaoResource::collection(Indicacao::all());
        return response()->json($indicacao,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndicacaoRequest $request)
    {
        $data = $request->validated();
        $indicacao = Indicacao::create($data);
        return response()->json($indicacao, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $indicacao = Indicacao::findOrFail($id);
        if(!$indicacao){
            return response()->json(['message'=> 'Indicação não encontrada'], 404);
        }else{
            $indicacaoResource = new IndicacaoResource($indicacao);
            return response()->json($indicacaoResource, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndicacaoRequest $request, string $id)
    {
        $indicacao = Indicacao::findOrFail($id);
        if(!$indicacao){
            return response()->json(['message'=> 'Indicação não encontrada'], 404);
        }else{
            $data = $request->validated();
            $indicacao->update($data);
            return response()->json($indicacao, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $indicacao = Indicacao::findOrFail($id);
        if(!$indicacao){
            return response()->json(['message'=> 'Indicação não encontrada'], 404);
        }else{
            $indicacao->delete();
            return response()->json(['message'=> 'Indicação deletada com sucesso'], 200);
        }
    }
}
