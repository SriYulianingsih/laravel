<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantriSeeder extends Seeder
{
    public function run()
    {
        DB::table('santris')->insert([
            ['nama' => 'Ahmad', 'umur' => 15, 'status' => 'aktif'],
            ['nama' => 'Aisyah', 'umur' => 17, 'status' => 'aktif'],
            ['nama' => 'Zaid', 'umur' => 20, 'status' => 'nonaktif'],
        ]);
    }
}
