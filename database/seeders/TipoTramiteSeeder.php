<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoTramite;

class TipoTramiteSeeder extends Seeder
{
    
    public function run(): void
    {
        TipoTramite::create(['nombre' => 'Pagos']);
        TipoTramite::create(['nombre' => 'Servicos']);
        TipoTramite::create(['nombre' => 'Permisos']);
    }
}
