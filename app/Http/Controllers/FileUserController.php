<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUserRequest;
use App\Http\Resources\FileUserResource;
use App\Models\FilesUsers;
use Illuminate\Http\Request;

class FileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fileUsers = FileUserResource::collection(FilesUsers::all());
        return response()->json($fileUsers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FileUserRequest $request)
    {
        $data = $request->validated();
        $fileUser = FilesUsers::create($data);
        return response()->json($fileUser, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fileUser = FilesUsers::findOrFail($id);
        if(!$fileUser) {
            return response()->json(['message' => 'Arquivo não encontrado'], 404);
        }
        return response()->json(new FileUserResource($fileUser), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FileUserRequest $request, string $id)
    {
        $fileUser = FilesUsers::findOrFail($id);
        if(!$fileUser) {
            return response()->json(['message' => 'Arquivo não encontrado'], 404);
        }
        $data = $request->validated();
        $fileUser->update($data);
        return response()->json($fileUser, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fileUser = FilesUsers::findOrFail($id);
        if(!$fileUser) {
            return response()->json(['message' => 'Arquivo não encontrado'], 404);
        }
        $fileUser->delete();
        return response()->json("Arquivo excluido com sucesso", 200);
    }
}
