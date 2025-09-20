<?php

namespace App\Http\Controllers;


use App\Http\Requests\Academia\StoreAcademiaRequest;
use App\Http\Requests\Academia\UpdateAcademiaRequest;
use App\Http\Resources\AcademiaResource;
use App\Models\Academia;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Academia::all();
        $resource = AcademiaResource::collection($data);
        return response()->json($resource);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcademiaRequest $request)
    {
        $data = $request->validated();
        $academia = Academia::create($data);
        return response()->json($academia, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $academia = Academia::findOrFail($id);
        if (!$academia) {
            return response()->json(['message' => 'Academia não encontrada'], 404);
        }
        $resource = new AcademiaResource($academia);
        return response()->json($resource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademiaRequest $request, string $id)
    {
        $academia = Academia::find($id);
        if (!$academia) {
            return response()->json(['message' => 'Academia não encontrada'], 404);
        }
        $academia->update($request->validated());
        return response()->json($academia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academia = Academia::find($id);
        if (!$academia) {
            return response()->json(['message' => 'Academia não encontrada'], 404);
        }
        $academia->delete();
        return response()->json("Academia deletada com sucesso", 200);
    }
}
