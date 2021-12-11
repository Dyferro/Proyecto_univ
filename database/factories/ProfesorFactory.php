<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Support\Str;
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
        $var=$this->faker->boolean();
        $grup="-";
        if($var){
            $grup=$this->faker->numerify('Gr ###');
        }
        return [
            //
            'nombre' =>'Prof. '.$this->faker->name(),
            'direccion'=> $this->faker->address(),
            'asignatura'=> $this->faker->word(),
            'esguia'=>$var,
            'grupo'=>$grup,
            'catedra'=> $this->faker->word(),
            'edad'=> $this->faker->numberBetween($min = 18, $max = 35),
        ];
    }
}
