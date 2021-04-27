<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudiante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->name();
        return [
            //
            'nombre' => $name,
            //'slug'=> Str::slug($name,'-'),
            'direccion'=> $this->faker->address(),
            'grupo'=> $this->faker->numerify('Gr ###'),
            'edad'=> $this->faker->numberBetween($min = 18, $max = 25),
            'nivel'=> $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
