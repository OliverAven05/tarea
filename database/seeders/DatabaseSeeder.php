<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Libro;
use App\Models\Prestamo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Crear usuarios
        User::factory(10)->create();

        // Crear autores y editoriales
        $autores = Autor::factory(10)->create();
        $editoriales = Editorial::factory(10)->create();

        // Obtener los IDs de los autores y editoriales creados
        $autoresIds = $autores->pluck('id_autor')->toArray();
        $editorialesIds = $editoriales->pluck('id_editorial')->toArray();

        // Crear libros utilizando autores y editoriales existentes
        foreach (range(1, 10) as $index) {
            Libro::factory()->create([
                'id_autor' => $this->faker->randomElement($autoresIds),
                'id_editorial' => $this->faker->randomElement($editorialesIds),
            ]);
        }

        // Crear préstamos
        Prestamo::factory(10)->create();
    }
}
