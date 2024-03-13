<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\defaultColumnsHelper;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('departamento_id',2);
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->string('provincia_id',4);
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->string('distrito_id',6);
            $table->foreign('distrito_id')->references('id')->on('distritos');
            defaultColumnsHelper::defaultColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store');
    }
};
