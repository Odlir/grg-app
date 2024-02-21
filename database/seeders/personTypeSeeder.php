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
        $tiposPersona = [
            ['descripcion'=>'cliente'],
            ['descripcion'=>'proveedor'],
            ['descripcion'=>'ambos'],
        ];

        personType::insert($tiposPersona);
    }
}
