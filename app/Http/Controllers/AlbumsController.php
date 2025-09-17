<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumsRequest;
use App\Http\Requests\StoreAlbumsRequest;
use App\Http\Requests\UpdateAlbumsRequest;
use App\Http\Resources\AlbumsResource;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = AlbumsResource::collection(Album::all());
        return response()->json($albums);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbumsRequest $request)
    {
        $data = $request->validated();
        $album = Album::create($data);
        return response()->json($album, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = Album::findOrFail($id);
        if(!$album){
            return response()->json(['message' => 'Album não encontrado'], 404);
        }
        return response()->json($album);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumsRequest $request, string $id)
    {
        $data = Album::findOrFail($id);
        if(!$data){
            return response()->json(['message' => 'Album não encontrado'], 404);
        }
        $album = $request->validated();
        $data->update($album);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::findOrFail($id);
        if(!$album){
            return response()->json(['message' => 'Album não encontrado'], 404);
        }
        $album->delete();
        return response()->json("Album excluído com sucesso", 200);
    }
}
