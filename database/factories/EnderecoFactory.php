<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rua' => fake()->streetName,
            'bairro' => fake()->streetSuffix,
            'cidade' => fake()->city,
            'estado' => fake()->state,
            'pais' => fake()->country,
            'complemento' => fake()->optional()->secondaryAddress,
            'numero' => fake()->buildingNumber,
        ];
    }
}
