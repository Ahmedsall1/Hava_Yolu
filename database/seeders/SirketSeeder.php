<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SirketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sir = [
            [
                'name' => 'Pegasus',
                'yonetici_id' => 6,

                'created_at' => now(),
                'updated_at' => now(),
            ]];
            DB::table('sirkets')->insert($sir);
    }
}
