<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\store;
class storeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $store = [
            ['name' => 'ATE', 'description' => 'Calle los Incas1','departamento_id' => '15','provincia_id' => '1501','distrito_id' => '150103', 'status' => 1],
        ];

        store::insert($store);
    }
}
