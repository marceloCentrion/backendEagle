<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcademiaRequest;
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
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcademiaRequest $request)
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
        $academia = Academia::find($id);
        if (!$academia) {
            return response()->json(['message' => 'Academia não encontrada'], 404);
        }
        return response()->json($academia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AcademiaRequest $request, string $id)
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
