<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Endereco;
use App\Models\TipoImovel;
use App\Models\ImovelImagem;


class ImovelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $endereco = Endereco::find($this->endereco_id);
        $tipo_imovel = TipoImovel::find($this->tipo_id);

        return [
            'id' => $this->id,
            'nome_imovel' => $this->nome_imovel,
            'status' => $this->status,
            'valor' => $this->valor,
            'foto_capa' => $this->foto_capa,
            'banheiro' => $this->banheiro,
            'quarto' => $this->quarto,
            'garagem' => $this->garagem,
            'area_toal' => $this->area_toal,
            'video' => $this->video,
            'localizacao' => $this->localizacao,
            'descricao' => $this->descricao,
            'endereco' => $endereco,
            'tipo_imovel' => $tipo_imovel,
            'imovel_imagem' => $this->ImovelImagem->toArray(),
            'caracteristicas' => $this->ImovelCaracteristicas->toArray(),
        ];
        
    }
}
