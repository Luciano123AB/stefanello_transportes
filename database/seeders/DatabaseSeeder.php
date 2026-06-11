<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Maurício Barbieri',
            'email' => 'mbarbieri273@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('@150177Mb'),
            'role' => 'admin',
            'created_at' => Carbon::now()
        ]);

        DB::table('data')->insert([
            'cnpj' => '33.589.582/0001-42',
            'whatsapp' => '(55) 99629-4129',
            'phone' => '(55) 99629-4129',
            'created_at' => Carbon::now()
        ]);
    }
}
