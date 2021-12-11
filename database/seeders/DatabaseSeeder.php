<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use App\Models\Estudiante;
use App\Models\Grupo;
use App\Models\Profesor;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Asignatura::factory(10)->create();
        Estudiante::factory(50)->create();
        Grupo::factory(10)->create();
        Profesor::factory(10)->create();
    }
}
