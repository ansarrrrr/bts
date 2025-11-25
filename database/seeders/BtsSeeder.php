<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
         DB::table('tbl_bts')->insert([
        'kd_site' => 'SITE002',
        'pemilik' => 'PT Telkom',
        'lat' => '-2.12345',
        'lng' => '111.12345',
        'kd_kab' => 'SUKAMARA',
        'kd_kec' => 'JELAI',
        'kd_desa' => 'PANTAI',
        'tinggi' => 40,
        'luas' => '100 m2',
        'status' => '1',
        'keterangan' => 'Menara aktif',
        'created_id' => 1,
        'created_at' => now(),
        'updated_id' => null,
        'updated_at' => null,
        ]);
    }
}
