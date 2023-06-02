<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Imobiliaria;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $imobiliaria = Imobiliaria::find($this->imobiliaria_id);

        return [
            'id' => $this->id,
            'nome' => $this->name,
            'email' => $this->email,
            'imobiliaria' => $this->imobiliaria_id
          ];
    }
}
