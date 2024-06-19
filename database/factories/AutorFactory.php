<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutorFactory extends Factory
{
    protected $model = \App\Models\Autor::class;

    public function definition()
    {
        return [
            'n_autor' => $this->faker->name,
            'fecha_nac' => $this->faker->date(),
            'pais' => $this->faker->country,
        ];
    }
}
