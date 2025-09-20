<?php

namespace App\Http\Controllers;

use App\Http\Requests\SegmentosParceiros\StoreSegmentosParceirosRequest;
use App\Http\Requests\SegmentosParceiros\UpdateSegmentosParceirosRequest;
use App\Models\SegmentosParceiros;
use Illuminate\Http\Request;

class SegmentosParceirosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SegmentosParceiros::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSegmentosParceirosRequest $request)
    {
        $segmentosParceiros = SegmentosParceiros::create($request->validated());
        return response()->json($segmentosParceiros, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $segmentosParceiros = SegmentosParceiros::findOrFail($id);
        if(!$segmentosParceiros){
            return response()->json(['message' => 'Segmento não encontrado'], 404);
        }
        return response()->json($segmentosParceiros);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSegmentosParceirosRequest $request, string $id)
    {
        $segmentosParceiros = SegmentosParceiros::findOrFail($id);
        if(!$segmentosParceiros){
            return response()->json(['message'=> 'Segmento não encontrado'], 404);
        }
        $segmentosParceiros->update($request->validated());
        return response()->json($segmentosParceiros);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $segmentosParceiros = SegmentosParceiros::findOrFail($id);
        if (!$segmentosParceiros) {
            return response()->json(['message' => 'Segmento não encontrado'], 404);
        }
        $segmentosParceiros->delete();
        return response()->json("Segmento excluído com sucesso!", 200);
    }
}
