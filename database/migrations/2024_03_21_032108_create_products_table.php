<?php

use App\Helpers\defaultColumnsHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->double('cost');
            $table->unsignedBigInteger('unit_of_measure_id');
            $table->enum('type', ['product', 'service']);
            $table->string('image', 500)->nullable();
            $table->double('minimum_stock')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('unit_of_measure_id')->references('id')->on('unit_of_measure');
            $table->foreign('category_id')->references('id')->on('products_category');
            defaultColumnsHelper::defaultColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
