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
        Schema::create('ucuses', function (Blueprint $table) {
            $table->id();
            $table->double('ucret');
            $table->string('ucusno');
            $table->foreignId('sefer_id')->constrained('sefers')->onDelete('cascade');
            $table->foreignId('ucak_id')->constrained('ucaks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ucuses');
    }
};
