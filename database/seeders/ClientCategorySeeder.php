<?php

namespace Database\Seeders;

use App\Models\ClientCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientCategory::factory()->count(5)->create();
    }
}
