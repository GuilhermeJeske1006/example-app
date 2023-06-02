<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imobiliaria;
use App\Http\Resources\ImobiliariaResource;


class ImobiliariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return ImobiliariaResource::collection(Imobiliaria::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Imobiliaria::create($request->all());
    
        return response()->json([
            "message" => "Imobiliaria cadastrada com sucesso"
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ImobiliariaResource::make(Imobiliaria::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Imobiliaria::delete($id);
        
        return response()->json([
            "message" => "Imobiliaria cadastrada com sucesso"
        ], 201);
    }
}
