<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoFactory extends Factory
{
    protected $model = \App\Models\Prestamo::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'id_libro' => \App\Models\Libro::factory(),
            'inicio' => $this->faker->date(),
            'fin' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'devuelto']),
        ];
    }
}
