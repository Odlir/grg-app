<?php

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
            $table->unsignedBigInteger('warehouse_id');
            $table->char('status')->comment('0-Disactive/1-Active')->default(1);
            $table->enum('type', ['product', 'service']);
            $table->string('image', 500)->nullable();
            $table->double('minimum_stock')->nullable();
            $table->double('initial_stock')->default(10);
            $table->unsignedBigInteger('category_id');
            $table->foreign('unit_of_measure_id')->references('id')->on('unit_of_measure');
            $table->foreign('category_id')->references('id')->on('products_category');
            $table->foreign('warehouse_id')->references('id')->on('warehouse');
            $table->timestamps();
            $table->softDeletes();
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
