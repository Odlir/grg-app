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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_types');
            $table->string('document_number');
            $table->string('legal_name');
            $table->string('direction');
            $table->unsignedBigInteger('client_category_id')->nullable();
            $table->string('alias')->unique()->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('rating',['1','2','3','4','5'])->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('ubigeo', 6)->nullable();
            $table->foreign('client_category_id')->references('id')->on('clients_category');
            $table->foreign('doc_types')->references('id')->on('doc_types');
            $table->foreign('ubigeo')->references('id')->on('districts');
            defaultColumnsHelper::defaultColumns($table);
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
