<?php

namespace App\Http\Controllers;

use App\Models\Academia_Rating;
use Illuminate\Http\Request;

class AcademiaRatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academiaRatings = Academia_Rating::all();
        return response()->json($academiaRatings, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "academia_id"=> "required|string|exists:academias,id",
            "rating"=> "required|integer|min:1|max:5",
        ]);
        $academiaRating = Academia_Rating::create($request->all());
        return response()->json($academiaRating, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $academiaRating = Academia_Rating::find($id);
        if (!$academiaRating) {
            return response()->json(['message' => 'Rating nao encontrado'], 404);
        }
        return response()->json($academiaRating, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "academia_id"=> "sometimes|string|exists:academias,id",
            "rating"=> "sometimes|integer|min:1|max:5",
        ]);
        $academiaRating = Academia_Rating::find($id);
        if (!$academiaRating) {
            return response()->json(['message' => 'Rating nao encontrado'], 404);
        }
        $academiaRating->update($request->all());
        return response()->json($academiaRating, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academiaRating = Academia_Rating::find($id);
        if(!$academiaRating){
            return response()->json(['message'=> 'Rating não encontrado'], 404);
        }
        $academiaRating->delete();
        return response()->json("Ratindo excluído com sucesso", 200);
    }
}
