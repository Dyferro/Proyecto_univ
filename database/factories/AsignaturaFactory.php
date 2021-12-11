<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {

        return [
            //Creando mis datos de prueba
            'nombre' => $this->faker->word(),
            //'slug'=> Str::slug($name,'-'),
            'descripcion' => $this->faker->sentence(),
            'duracionhoras' => $this->faker->numberBetween($min = 100, $max = 250),
            'nivel' => $this->faker->numberBetween($min = 1, $max = 5),

        ];
    }
}
