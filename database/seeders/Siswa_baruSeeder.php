<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Siswa_baruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('siswa_baru')->insert([
            [
            'Email' => 'adel@gmail.com',
            'Nama' => 'Adeline',
            'NIK' => '91234567',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
