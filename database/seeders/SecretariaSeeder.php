<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Secretarias;

class SecretariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Secretarias::create(['nombre' => 'PRESIDENCIA']);
        Secretarias::create(['nombre' => 'VICE PRESIDENCIA']);
        Secretarias::create(['nombre' => 'STRIA. RÉGIMEN INTERNO Y PERSONAL']);
    }
}
