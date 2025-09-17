<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserResource::collection(User::all());
        return response()->json($users);   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $userRequest)
    {
        $data = $userRequest->validated();
        $user = User::create($data);
        return response()->json($user, 201);        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Usuario nao encontrado'], 404);
        }
        $resource = new UserResource($user);
        return response()->json($resource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
         $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Usuario nao encontrado'], 404);
        }
        $user->update($request->validated());
        return response()->json($user,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Usuario nao encontrado'], 404);
        }
        $user->delete();
        return response()->json("Usuario deletado com sucesso", 200);
    }
}
