<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();
        // \App\Models\Endereco::factory(10)->create();
        // \App\Models\Imobiliaria::factory(10)->create();

        \App\Models\TipoImovel::factory(10)->create();
        \App\Models\Imovel::factory(10)->create();


       
    }
}
