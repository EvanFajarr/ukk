<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi_15467')->insert([
            'name' => 'lainnya',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'bantul',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'yogyakarta',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'kulon progo',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'gunung kidul',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'sleman',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'magelang',
        ]);
        DB::table('lokasi_15467')->insert([
            'name' => 'kebumen',
        ]);
    }
}
