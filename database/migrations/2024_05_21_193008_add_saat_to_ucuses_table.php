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
        Schema::table('ucuses', function (Blueprint $table) {
            $table->time('saat')->nullable();  // Adding 'saat' column of type time
            $table->time('sure')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ucuses', function (Blueprint $table) {
            $table->dropColumn('saat');
            $table->dropColumn('sure');
        });
    }
};
