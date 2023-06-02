<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Endereco;


class ImobiliariaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $endereco = Endereco::find($this->endereco_id);

        return [
            'nome_categoria' => $this->nome_categoria,
            'imoveis' => $this->imoveis->map(function ($imovel) {
                return [
                    'id' => $imovel->id,
                    'nome_imovel' => $imovel->nome_imovel,
                    'status' => $imovel->status,
                    'valor' => $imovel->valor,
                    'foto_capa' => $imovel->foto_capa,
                    'banheiro' => $imovel->banheiro,
                    'quarto' => $imovel->quarto,
                    'garagem' => $imovel->garagem,
                    'area_toal' => $imovel->area_toal,
                    'video' => $imovel->video,
                    'localizacao' => $imovel->localizacao,
                    'descricao' => $imovel->descricao,
                    'endereco' => $endereco,
                    'imovel_imagem' => $imovel->ImovelImagem->toArray(),
                    'caracteristicas' => $imovel->ImovelCaracteristicas->toArray(),
                ];
            }),
        ];
    }
}
