<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\warehouse;

class warehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouse = [
            ['name' => 'ATE', 'description' => 'Calle los Incas1', 'establishment_id' => '1', 'department_id' => '15', 'province_id' => '1501', 'district_id' => '150103', 'status' => 1],
        ];

        warehouse::insert($warehouse);
    }
}
