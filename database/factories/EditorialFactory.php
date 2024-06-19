<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EditorialFactory extends Factory
{
    protected $model = \App\Models\Editorial::class;

    public function definition()
    {
        return [
            'n_editorial' => $this->faker->company,
        ];
    }
}
