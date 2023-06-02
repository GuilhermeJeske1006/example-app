<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Endereco;
use App\Models\Imobiliaria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imobiliaria>
 */
class ImobiliariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name,
            'creci' => fake()->randomNumber(5),
            'logo' => fake()->imageUrl(),
            'email' => fake()->email,
            'whatsapp' => fake()->phoneNumber,
            'instagram' => fake()->userName,
            'facebook' => fake()->userName,
            'cor' => fake()->hexColor,
            'descricao' => fake()->paragraph,
            'palavras_chaves' => fake()->words(5, true),
            'titulo' => fake()->sentence,
            'endereco_id' => function () {
                return Endereco::factory()->create()->id;
            },
        ];
    }
}
