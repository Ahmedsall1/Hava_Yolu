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
        Schema::create('ucaks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tipi');
            $table->string('harf');
            $table->string('sira');
            $table->foreignId('pilot_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('hostese_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ucaks');
    }
};
