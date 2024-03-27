<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductBrandDetail;
use App\Models\ProductWarehouse;
use App\Models\warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(50)->create()->each(function ($product) {
            $brand = ProductBrand::all()->random()->id;
            $warehouse = warehouse::all()->random()->id;

            ProductBrandDetail::create([
                'product_id' => $product->id,
                'product_brand_id' => $brand,
            ]);

            ProductWarehouse::create([
                'product_id' => $product->id,
                'warehouse_id' => $warehouse,
                'initial_stock' => fake()->numberBetween(1,20)
            ]);
        });
    }
}
