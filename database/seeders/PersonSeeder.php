<?php

namespace Database\Seeders;

use App\Models\ClientCategory;
use App\Models\Person;
use App\Models\personType;
use App\Models\PersonTypeDetail;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::factory()->count(50)->create()->each(function ($person) {
            $personType = personType::all()->random()->id;

            PersonTypeDetail::create([
                'person_id' => $person->id,
                'person_type_id' => $personType,
            ]);

            if($personType === 1) {
                $person->client_category_id = ClientCategory::all()->random()->id;
                $person->save();
            }
        });
    }
}
