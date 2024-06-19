<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = \App\Models\Libro::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'annio' => $this->faker->year,
            'id_autor' => \App\Models\Autor::factory(),
            'id_editorial' => \App\Models\Editorial::factory(),
            'publicacion' => $this->faker->date(),
        ];
    }
}
