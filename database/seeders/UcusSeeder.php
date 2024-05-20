<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UcusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ucuses = [
            [
                'ucret' => 600, // Example ucret value
                'ucusno' => 'ABC123', // Example ucusno value
                'sefer_id' => 1, // Replace with actual sefer_id
                'ucak_id' => 1, // Replace with actual ucak_id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ucret' => 150, // Example ucret value
                'ucusno' => 'XYZ456', // Example ucusno value
                'sefer_id' => 2, // Replace with actual sefer_id
                'ucak_id' => 2, // Replace with actual ucak_id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more rows as needed
        ];


        // Insert the data into the ucuses table
        DB::table('ucuses')->insert($ucuses);
    }
}
