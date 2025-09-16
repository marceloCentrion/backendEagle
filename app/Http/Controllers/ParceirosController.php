<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParceirosRequest;
use App\Http\Resources\ParceirosResource;
use App\Models\Parceiro;
use Illuminate\Http\Request;

class ParceirosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parceiros = ParceirosResource::collection(Parceiro::all());
        return response()->json($parceiros);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParceirosRequest $request)
    {
        $data = $request->validated();
        $parceiros = Parceiro::create($data);
        return response()->json($parceiros);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Parceiro::findOrFail($id);
        if(!$data){
            return response()->json(["Parceiro não encontrado", 404]);
        }
        $parceiro = new ParceirosResource($data);
        return response()->json($parceiro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParceirosRequest $request, string $id)
    {
        $data = Parceiro::findOrFail($id);
        if(!$data){
            return response()->json(["Parceiro não encontrado",404]);
        }
        $data->update($request->validated());
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parceiro = Parceiro::findOrFail($id);
        if(!$parceiro){
            return response()->json(["Parceiro não encontrado",404]);
        }
        $parceiro->delete();
        return response()->json("Parceiro excluído com sucesso",200);
    }
}
