<?php

namespace Database\Seeders;

use App\Models\Artistas;
use App\Models\Canciones;
use App\Models\Lanzamientos;
use App\Models\Realiza;
use Illuminate\Database\Seeder;

class MakeLanzamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artistas::factory()->count(50)->create();
        Lanzamientos::factory()->count(50)->create();
        Realiza::factory()->count(50)->create();
        Canciones::factory()->count(50)->create();
    }
}
