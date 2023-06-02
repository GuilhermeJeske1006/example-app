<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Imovel;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_categoria',
        'imobiliaria_id',
    
    ];
    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }
}
