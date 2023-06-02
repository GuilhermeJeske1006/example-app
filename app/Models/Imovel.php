<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImovelImagem;
use App\Models\CaracteristicaImovel;


class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imoveis';

    protected $fillable = [
        'nome_imovel',
        'status',
        'valor',
        'foto_capa',
        'banheiro',
        'quarto',
        'garagem',
        'area_toal',
        'video',
        'localizacao',
        'descricao',
        'tipo_id',
        'endereco_id',
        'categoria_id'
    ];


    public function ImovelImagem()
    {
        return $this->hasMany(ImovelImagem::class);
    }

    public function ImovelCaracteristicas()
    {
        return $this->hasMany(CaracteristicaImovel::class);
    }

}
