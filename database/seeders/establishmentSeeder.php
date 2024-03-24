<?php

namespace Database\Seeders;
use App\Models\establishment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class establishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $establishment = [
            ['name' => 'ATE', 'description' => 'Calle los Incass','department_id' => '150000','province_id' => '150100','district_id' => '150103', 'status' => 1],
        ];

        establishment::insert($establishment);
    }
}
