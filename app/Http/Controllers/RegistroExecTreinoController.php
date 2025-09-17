<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroExecTreinoRequest;
use App\Http\Requests\StoreRegistroExecTreinoRequest;
use App\Http\Requests\UpdateRegistroExecTreinoRequest;
use App\Http\Resources\RegistroExecTreinoResource;
use App\Models\RegistroExecTreino;
use Illuminate\Http\Request;

class RegistroExecTreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RegistroExecTreinoResource::collection(RegistroExecTreino::all());
        return response()->json( $data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistroExecTreinoRequest $request)
    {
        $data = $request->validated();
        $registro = RegistroExecTreino::create($data);
        return response()->json( $registro, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = RegistroExecTreino::findOrFail($id);
        if ($registro) {
            return response()->json( new $registro, 200);
        } else {
            return response()->json(['message' => 'Registro não encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistroExecTreinoRequest $request, string $id)
    {
        $registro = RegistroExecTreino::findOrFail($id);
        if ($registro) {
            $registro->update($request->validated());
            return response()->json( $registro, 200);
        } else {
            return response()->json(['message' => 'Registro não encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = RegistroExecTreino::findOrFail($id);
        if ($registro) {
            $registro->delete();
            return response()->json(['message' => 'Registro deletado com sucesso'], 200);
        } else {
            return response()->json(['message' => 'Registro não encontrado'], 404);
        }
    }
}
