<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categoria;

class Imobiliaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'creci',
        'logo',
        'whatsapp',
        'instagram',
        'facebook',
        'telefone',
        'cor',
        'descricao',
        'palavras_chaves',
        'titulo',
        'endereco_id',
    ];


    public function Usuarios()
    {
        return $this->hasMany(User::class);
    }

    public function Categorias()
    {
        return $this->hasMany(Categoria::class);
    }

}
