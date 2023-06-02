<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imobiliaria;
use App\Http\Resources\ImobiliariaResource;

class ImobiliariaController extends Controller
{
    public function index(){

        $Imobiliaria = Imobiliaria::paginate(15);

        return ImobiliariaResource::collection($Imobiliaria);
    }
}
