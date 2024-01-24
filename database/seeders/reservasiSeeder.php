<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservasi')->insert(array(
            ['Transaksi'=>'8','IdPengunjung'=>'5678','Jmlah_Kamar'=>'100','Tggl_Masuk'=>'2024-02-24','Tggl_Keluar'=>'2001-10-11','Lama_Nginap'=>'2','Totl_Harga'=>'100000'],
            ['Transaksi'=>'10','IdPengunjung'=>'58','Jmlah_Kamar'=>'90','Tggl_Masuk'=>'2024-01-25','Tggl_Keluar'=>'2004-10-11','Lama_Nginap'=>'4','Totl_Harga'=>'900000']
        ));
    }
}
