<?php

namespace Database\Factories;

use App\Models\District;
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
            'document_number' => fake()->numerify('#########'),
            'legal_name' => fake()->name(),
            'direction' => fake()->address(),
            'alias' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'rating' => fake()->randomElement(['1','2','3','4','5']),
            'phone' => fake()->numerify('###-###-###'),
            'email' => fake()->email(),
            'location' => $this->generateCoordinates(),
            'ubigeo' => District::all()->random()->id,
            'status' => 1
        ];
    }

    private function generateCoordinates()
    {
        $latitude = mt_rand(-90 * 1000000, 90 * 1000000) / 1000000;

        $longitude = mt_rand(-180 * 1000000, 180 * 1000000) / 1000000;

        return $latitude . ',' . $longitude;
    }
}
