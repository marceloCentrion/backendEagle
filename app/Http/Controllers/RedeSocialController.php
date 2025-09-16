<?php

namespace App\Http\Controllers;

use App\Http\Requests\RedeSocialRequest;
use App\Http\Resources\RedeSocialResource;
use App\Models\RedeSociais;
use Illuminate\Http\Request;

class RedeSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redeSociais = RedeSocialResource::collection(RedeSociais::all());
        return response()->json($redeSociais);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RedeSocialRequest $request)
    {
        $data = $request->validated();
        $redeSocial = RedeSociais::create($data);
        return response()->json($redeSocial, 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $redeSocial = RedeSociais::findOrFail($id);
        if(!$redeSocial){
            return response()->json(['message'=> 'Rede Social não encontrada'], 404);
        }else{
            $redeSocialResource = new RedeSocialResource($redeSocial);
            return response()->json($redeSocialResource, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $redeSocial = RedeSociais::findOrFail($id);
        if(!$redeSocial){
            return response()->json(['message'=> 'Rede Social não encontrada'], 404);
        }else{
            $data = $request->all();
            $redeSocial->update($data);
            return response()->json($redeSocial, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $redeSocial = RedeSociais::findOrFail($id);
        if(!$redeSocial){
            return response()->json(['message'=> 'Rede Social não encontrada'], 404);
        }else{
            $redeSocial->delete();
            return response()->json("Rede Social excluída com sucesso!", 200);
        }
    }
}
