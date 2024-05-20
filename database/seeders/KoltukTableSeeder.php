<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class KoltukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seats = [];
        $seatLetters = ['A', 'B', 'C', 'D', 'E', 'F'];
        for ($i = 1; $i <= 18; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $seatType = $i <= 6 ? 'Ekonomik' : ($i <= 12 ? 'Standart' : 'Business');
                $seatNumber = $i . $seatLetters[$j];

                $seats[] = [
                    'tipi' => $seatType,
                    'no' => $seatNumber,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('koltuks')->insert($seats);
    }
}
