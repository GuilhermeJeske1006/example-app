<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Imovel;

use App\Http\Resources\ImovelResource;
use App\Http\Resources\CategoriaImovelResource;


class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        $categoria = Categoria::where('imobiliaria_id', $id)->get();

        return CategoriaImovelResource::collection($categoria);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Imovel::create($request->all());
    
        return response()->json([
            "message" => "Imovel cadastrada com sucesso"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id_imovel)
    {        
        return ImovelResource::make(Imovel::find($id_imovel));

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
        //
    }
}
