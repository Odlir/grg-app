<?php

namespace Database\Seeders;

use App\Models\DocType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['description'=>'DNI'],
            ['description'=>'RUC'],
        ];

        DocType::insert($tipos);
    }
}
