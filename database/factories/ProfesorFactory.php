<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'direccion'=> $this->faker->address(),
            'asignatura'=> $this->faker->company(),
            'catedra'=> $this->faker->word(),
            'edad'=> $this->faker->numberBetween($min = 18, $max = 25),
        ];
    }
}
