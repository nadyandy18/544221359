<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kamarSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamar')->insert(array(
            ['NO_Kamar'=>'3','Jenis_Kamar'=>'Deluxe','Harga'=>'100000'],
            ['NO_Kamar'=>'3','Jenis_Kamar'=>'VIP','Harga'=>'300000']
        ));
    }
}
