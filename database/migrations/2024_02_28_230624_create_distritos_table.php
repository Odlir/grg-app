<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->string('id', 6)->primary();
            $table->string('nombre');
            $table->string('provincia_id', 4);
            $table->foreign('provincia_id')->references('id')->on('provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distritos');
    }
};
