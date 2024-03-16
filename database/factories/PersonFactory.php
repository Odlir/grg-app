<?php

namespace Database\Factories;

use App\Models\Distrito;
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
            'nro_documento' => fake()->numerify('#########'),
            'nombre_legal' => fake()->name(),
            'direccion' => fake()->address(),
            'alias' => fake()->name(),
            'genero' => fake()->randomElement(['masculino', 'femenino']),
            'rating' => fake()->randomElement(['1','2','3','4','5']),
            'telefono' => fake()->numerify('###-###-###'),
            'correo' => fake()->email(),
            'ubicacion' => $this->generateCoordinates(),
            'ubigeo' => Distrito::all()->random()->id,
        ];
    }

    private function generateCoordinates()
    {
        $latitude = mt_rand(-90 * 1000000, 90 * 1000000) / 1000000;

        $longitude = mt_rand(-180 * 1000000, 180 * 1000000) / 1000000;

        return $latitude . ',' . $longitude;
    }
}
