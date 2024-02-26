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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_types');
            $table->string('nro_documento');
            $table->string('nombre_legal');
            $table->string('direccion');
            $table->unsignedBigInteger('tipo_persona');
            $table->string('alias')->unique()->nullable();
            $table->enum('genero', ['masculino', 'femenino'])->nullable();
            $table->enum('rating',['1','2','3','4','5'])->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('ubigeo')->nullable();
            $table->timestamps();
            $table->char('estado')->comment('0-Inactivo/1-Activo')->default(1);
            $table->softDeletes();
            $table->foreign('doc_types')->references('id')->on('doc_types');
            $table->foreign('tipo_persona')->references('id')->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
