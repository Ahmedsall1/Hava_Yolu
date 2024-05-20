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
        Schema::table('sefers', function (Blueprint $table) {
            $table->string('nerden');
            $table->string('nereye');
            $table->integer('km');
            $table->date('tarih');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sefers', function (Blueprint $table) {

            $table->dropColumn('nerden');
                $table->dropColumn('nereye');
                $table->dropColumn('km');
                $table->dropColumn('tarih');
        });
    }
};
