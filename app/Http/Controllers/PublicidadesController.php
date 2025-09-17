<?php

namespace App\Http\Controllers;

use App\Http\Requests\Publicidade\StorePublicidadeRequest;
use App\Http\Requests\Publicidade\UpdatePublicidadeRequest;
use App\Http\Resources\PublicidadesResource;
use App\Models\Publicidade;
use Illuminate\Http\Request;

class PublicidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicidades = Publicidade::paginate(20);
        return PublicidadesResource::collection($publicidades);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicidadeRequest $request)
    {
        $data = $request->validated();
        $publicidade = Publicidade::create($data);
        return new PublicidadesResource($publicidade);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publicidade = Publicidade::findOrFail($id);
        return new PublicidadesResource($publicidade);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicidadeRequest $request, string $id)
    {
        $publicidade = Publicidade::findOrFail($id);
        $publicidade->update($request->validated());
        return new PublicidadesResource($publicidade);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publicidade = Publicidade::findOrFail($id);
        $publicidade->delete();
        return response()->noContent();
    }
}
