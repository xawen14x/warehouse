<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role' => '1',
            'nik' => '1',
            'status' => '1',
            'perusahaanId' => '1',
            'username' => '1',
            'password' => Hash::make('12345678')
        ]);
    }
}
