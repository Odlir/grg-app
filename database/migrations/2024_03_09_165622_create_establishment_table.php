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
        Schema::create('establishment', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('department_id',2);
            $table->foreign('department_id')->references('id')->on('departments');
            $table->string('province_id',4);
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->string('district_id',6);
            $table->foreign('district_id')->references('id')->on('districts');
            defaultColumnsHelper::defaultColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishment');
    }
};
