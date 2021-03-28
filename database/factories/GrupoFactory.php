<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grupo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombregrupo'=> $this->faker->numerify('Gr ###'),
            'totalestudiantes'=> $this->faker->numberBetween($min = 30, $max = 35),
            'nivel'=> $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
