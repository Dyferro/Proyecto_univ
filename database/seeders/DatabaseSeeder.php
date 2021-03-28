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

        Asignatura::factory(12)->create();
        Estudiante::factory(100)->create();
        Grupo::factory(8)->create();
        Profesor::factory(20)->create();
    }
}
