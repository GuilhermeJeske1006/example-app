<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;


class UserController extends Controller
{
    public function index(){

        $user = User::paginate(15);

        return UserResource::collection($user);
    }

    public function create(Request $request) {

        User::create($request->all());
    
        return response()->json([
            "message" => "student record created"
        ], 201);
      }

      

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::delete($id);

        return response()->json([
            "message" => "Usuario deletado com sucesso"
        ], 201);
    }
}
