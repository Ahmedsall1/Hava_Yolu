<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UcakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ucaks = [
            [//id	name	tipi	harf	sira	pilot_id	hostese_id	created_at	updated_at	sirket_id
                'name' => 'Ucak1',
                'sirket_id' => 1,
                'tipi' => 'kucuk',
                'harf' => 'D',
                'sira' => 18,
                'pilot_id' => 2, // Replace with actual pilot_id
                'hostese_id' => 3, // Replace with actual hostese_id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ucak2',
                'sirket_id' => 1,
                'tipi' => 'buyuk',
                'harf' => 'F',
                'sira' => 30,
                'pilot_id' => 4, // Replace with actual pilot_id
                'hostese_id' => 5, // Replace with actual hostese_id
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ucak3',
                'sirket_id' => 1,
                'tipi' => 'orta',
                'harf' => 'F',
                'sira' => 18,
                'pilot_id' => 2, // Replace with actual pilot_id
                'hostese_id' => 5, // Replace with actual hostese_id
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data into the ucaks table
        DB::table('ucaks')->insert($ucaks);
    }
}
