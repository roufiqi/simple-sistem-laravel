<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nasabah')->insert([
            'nama' => 'Joko',
            'nomor_identitas' => '1001',
            'alamat' => 'Jakarta, jalan kesana kemari',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('nasabah')->insert([
            'nama' => 'Raden',
            'nomor_identitas' => '1002',
            'alamat' => 'Jakarta, jalan kesana kemari',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
