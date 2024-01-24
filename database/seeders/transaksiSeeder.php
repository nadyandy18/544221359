<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class transaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_transaksi')->insert(array(
            ['Id_Detail_Transaksi'=>'3876','No_Transaksi'=>'3456','No_Kamar'=>'8'],
            ['Id_Detail_Transaksi'=>'3444','No_Transaksi'=>'7543','No_Kamar'=>'10']
        ));
    }
}
