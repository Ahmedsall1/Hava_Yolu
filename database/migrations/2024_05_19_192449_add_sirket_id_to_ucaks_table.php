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
        Schema::table('ucaks', function (Blueprint $table) {
            $table->unsignedBigInteger('sirket_id');
            $table->foreign('sirket_id')->references('id')->on('sirkets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ucaks', function (Blueprint $table) {
            $table->dropForeign(['sirket_id']);
            $table->dropColumn('sirket_id');
        });
    }
};
