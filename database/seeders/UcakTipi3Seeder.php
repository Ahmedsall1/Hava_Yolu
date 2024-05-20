<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UcakTipi3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $koltukRecords = DB::table('koltuks')->skip(288)->take(72)->get();

        // Insert the retrieved records into the ucaktipi_2s table
        foreach ($koltukRecords as $record) {
            DB::table('ucaktipi_3s')->insert([
                'koltuk_id' => $record->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
