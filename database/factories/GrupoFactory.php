<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Support\Str;
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
        $name =$this->faker->numerify('Gr ###');
        return [
            //
            'nombregrupo'=> $name,
            'slug'=> Str::slug($name,'-'),
            'totalestudiantes'=> $this->faker->numberBetween($min = 30, $max = 35),
            'nivel'=> $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
