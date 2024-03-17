<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DocTypeSeeder::class,
            personTypeSeeder::class,
            UbigeoSeeder::class,
            PersonSeeder::class,
            establishmentSeeder::class,
            warehouseSeeder::class,
            unitOfMeasureSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class
        ]);
    }
}
