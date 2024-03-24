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
            $table->string('document_number');
            $table->string('legal_name');
            $table->string('direction');
            $table->string('alias')->unique()->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('rating',['1','2','3','4','5'])->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('ubigeo', 6)->nullable();
            $table->timestamps();
            $table->char('status')->comment('0-Inactive/1-Active')->default(1);
            $table->softDeletes();
            $table->foreign('doc_types')->references('id')->on('doc_types');
            $table->foreign('ubigeo')->references('id')->on('districts');
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
