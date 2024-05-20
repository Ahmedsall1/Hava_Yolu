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
        Schema::create('bilets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ucus_id')->constrained('ucuses')->onDelete('cascade');
            $table->foreignId('yolcu_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('koltuk_id')->constrained('koltuks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilets');
    }
};
