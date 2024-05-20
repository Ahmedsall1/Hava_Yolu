<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ahmed Salih',
                'type' => 'Yolcu',
                'email' => 'userone@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password1'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ali Riza',
                'type' => 'Pilot',
                'email' => 'usertwo@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password2'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more users here...
            [
                'name' => 'Fatma Hamo',
                'type' => 'Hostese',
                'email' => 'userthree@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password3'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fuad Nasir',
                'type' => 'Pilot',
                'email' => 'userfour@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password4'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Muhammed Osman',
                'type' => 'Hostese',
                'email' => 'userfive@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password5'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'admin',
                'type' => 'Yonetici',
                'email' => 'admin@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hayan Taypa',
                'type' => 'Yolcu',
                'email' => 'userseven@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password7'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hasan Sahvan',
                'type' => 'Yolcu',
                'email' => 'usereight@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password8'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Huzayfa Elmuhamed',
                'type' => 'Yolcu',
                'email' => 'usernine@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password9'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ali Barhi',
                'type' => 'Yolcu',
                'email' => 'userten@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password10'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
