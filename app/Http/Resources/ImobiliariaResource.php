<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImobiliariaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'creci' => $this->creci,
            'logo' => $this->logo,
            'whatsapp' => $this->whatsapp,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            'telefone' => $this->telefone,
            'descricao' => $this->descricao,
            'palavras_chaves' => $this->palavras_chaves,
            'titulo' => $this->titulo,

          ];
        return parent::toArray($request);
    }
}
