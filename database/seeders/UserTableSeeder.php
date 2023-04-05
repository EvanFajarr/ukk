<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('123456'),
            'rolle' => 'admin',
            'tlp' => '089505549223'
        ]);
        DB::table('users')->insert([
            'name' => 'petugas',
            'email' => 'petugas1@gmail.com',
            'password' => Hash::make('123456'),
            'rolle' => 'petugas',
            'tlp' => '088707878857'
        ]);
    }
}
