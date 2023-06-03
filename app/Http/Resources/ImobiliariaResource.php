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
            'id' => $this->id,
            'nome' => $this->nome,
            'creci' => $this->creci,
            'logo' => $this->logo,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            'telefone' => $this->telefone,
            'cor' => $this->cor,
            'descricao' => $this->descricao,
            'palavras_chaves' => $this->palavras_chaves,
            'titulo' => $this->titulo,
            'endereco' => $endereco,
            'usuarios' => $this->Usuarios->map(function ($user) {
                return [
                    'id' => $user->id,
                    'nome' => $user->name,
                    'email' => $user->email,
                ];
            }),

        ];
    }
}
