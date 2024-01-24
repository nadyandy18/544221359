<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengunjung')->insert(array(
            ['ID_Pengunjung'=>'1234','Nama_Pengunjung'=>'Wonu','Alamat'=>'rumah','No_Telpon'=>'081234','No_KTP'=>'123456'],
            ['ID_Pengunjung'=>'4321','Nama_Pengunjung'=>'Kai','Alamat'=>'rumah','No_Telpon'=>'08234','No_KTP'=>'12346']
        ));
    }
}
