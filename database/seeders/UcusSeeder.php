<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UcusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 1000; // Number of records per batch
        $ucuses = [];
        $batchCount = 0;

        $Saat = [
            '02:30:00', '06:00:00', '09:45:00',
            '12:50:00', '17:40:00', '21:30:00',
        ];
        $maxSeferId = 291782;

        for ($i = 9031; $i <= $maxSeferId; $i++) {
            $t = ($i*4) -65;


                $ucuses[] = [
                    'ucret' =>  1300,
                    'ucusno' => "HYL.{$t}",
                    'sefer_id' => $i,
                    'ucak_id' => 3,
                    'saat' => '23:15:00',
                    'sure' => '01:30:00',
                ];
                $t++;
                if (count($ucuses) >= $batchSize) {
                    DB::table('ucuses')->insert($ucuses);
                    $ucuses = [];
                    $batchCount++;
                    echo "Batch {$batchCount} inserted.\n";
                }

        }

        if (!empty($ucuses)) {
            DB::table('ucuses')->insert($ucuses);
            echo "Final batch inserted.\n";
        }

        echo "Seeding completed.\n";
    }
}
