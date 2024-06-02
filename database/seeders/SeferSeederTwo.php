<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SeferController;
class SeferSeederTwo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $oneMonthAgo = $now->copy()->subMonth();

        $seferData = [];

        // Loop through each day from now to one month ago
        for ($date = $oneMonthAgo; $date->lte($now); $date->addDay()) {
            foreach (SeferController::$AirPorts as $air) {
                        $seferData[] = [
                            'nerden' => SeferController::$AirPorts[94],
                            'nereye' => $air,
                            'km' => 1000,
                            'tarih' => $date->format('Y-m-d')
                        ];

            }
        }

        // Insert all the sefer data into the database
        DB::table('sefers')->insert($seferData);
    }
}
