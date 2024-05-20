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
        Schema::create('sefers', function (Blueprint $table) {
            $table->id();
            $table->string('nerden');
            $table->string('nereye');
            $table->string('sure');
            $table->integer('KM');
            $table->date('tarih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sefers');
    }
};
