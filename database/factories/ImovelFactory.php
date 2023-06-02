<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Endereco;
use App\Models\TipoImovel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imovel>
 */
class ImovelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nome_imovel' => fake()->word,
            'categoria_id' => 1,
            'status' => fake()->randomElement(['Disponível', 'Em andamento', 'Vendido']),
            'valor' => fake()->randomFloat(2, 1000, 1000000),
            'foto_capa' => fake()->imageUrl(),
            'banheiro' => fake()->optional()->randomNumber(1, 5),
            'quarto' => fake()->optional()->randomNumber(1, 5),
            'garagem' => fake()->optional()->randomNumber(1, 3),
            'area_toal' => fake()->optional()->randomFloat(2, 50, 500),
            'video' => fake()->optional()->url,
            'localizacao' => fake()->optional()->address,
            'descricao' => fake()->optional()->paragraph,
            'tipo_id' => function () {
                return TipoImovel::factory()->create()->id;
            },
            'endereco_id' => function () {
                return Endereco::factory()->create()->id;
            },
        ];
    
    }
}
