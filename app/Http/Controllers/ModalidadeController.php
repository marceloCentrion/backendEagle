<?php

namespace App\Http\Controllers;

use App\Http\Requests\Modalidade\StoreModalidadeRequest;
use App\Http\Requests\Modalidade\UpdateModalidadeRequest;
use App\Http\Resources\ModalidadeResource;
use App\Models\Modalidades;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modadalidade = Modalidades::paginate(10);
        return ModalidadeResource::collection($modadalidade);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModalidadeRequest $request)
    {
        $data = $request->validated();
        $modalidade = Modalidades::create($data);
        return new ModalidadeResource($modalidade);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $modalidade = Modalidades::findOrFail($id);
        return new ModalidadeResource($modalidade);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModalidadeRequest $request, string $id)
    {
        $modalidade = Modalidades::findOrFail($id);
        $data = $request->validated();
        $modalidade->update($data);
        return new ModalidadeResource($modalidade);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modalidade = Modalidades::findOrFail($id);
        $modalidade->delete();
        return response()->json(['message' => 'Modalidade deletada com sucesso!'], 200);
    }
}
