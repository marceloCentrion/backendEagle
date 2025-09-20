<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilAcessos\StorePerfilAcessosRequest;
use App\Http\Requests\PerfilAcessos\UpdatePerfilAcessosRequest;
use App\Http\Resources\PerfilAcessosResource;
use App\Models\PerfilAcesso;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class PerfilAcessosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfilAcesso = PerfilAcessosResource::collection(PerfilAcesso::all());
        return response()->json($perfilAcesso, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerfilAcessosRequest $request)
    {
        $data = $request->validated();
        $perfilAcesso = PerfilAcesso::create($data);
        return response()->json($perfilAcesso, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perfilAcesso = PerfilAcesso::findOrFail($id);
        if (!$perfilAcesso) {
            return response()->json(['message' => 'Perfil de Acesso não encontrado'], 404);
        }
        return response()->json(new PerfilAcessosResource($perfilAcesso), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerfilAcessosRequest $request, string $id)
    {
        $perfilAcesso = PerfilAcesso::findOrFail($id);
        if (!$perfilAcesso) {
            return response()->json(['message' => 'Perfil de Acesso não encontrado'], 404);
        }
        $data = $request->validated();
        $perfilAcesso->update($data);
        return response()->json($perfilAcesso, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perfilAcesso = PerfilAcesso::findOrFail($id);
        if (!$perfilAcesso) {
            return response()->json(['message' => 'Perfil de Acesso não encontrado'], 404);
        }
        $perfilAcesso->delete();
        return response()->json("Perfil Acesso excluído com sucesso", 200);
    }
}
