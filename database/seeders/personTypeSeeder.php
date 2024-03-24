<?php

namespace Database\Seeders;

use App\Models\personType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personTypes = [
            ['description'=>'Cliente'],
            ['description'=>'Proveedor'],
            ['description'=>'Empleado']
        ];

        personType::insert($personTypes);
    }
}
