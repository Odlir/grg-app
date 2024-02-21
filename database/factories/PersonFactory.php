<?php

namespace Database\Factories;

use App\Models\DocType;
use App\Models\personType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doc_types' => DocType::all()->random()->id,
            'nro_documento' => Str::random(9),
            'nombre_legal' => fake()->name(),
            'direccion' => fake()->address(),
            'tipo_persona' => personType::all()->random()->id,
            'alias' => fake()->name(),
            'genero' => faker()->randomElement(['masculino', 'femenino']),
            'telefono' => faker()->numerify('###-###-###'),
            'correo' => fake()->email(),
            'ubicacion' => Str::random(10),
            'ubigeo' => Str::random(6),
        ];
    }
}
