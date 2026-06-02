<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'MBarbieri273',
            'email' => 'mbarbieri273@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('150177Mb'),
            'created_at' => Carbon::now()
        ]);
    }
}
