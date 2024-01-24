<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    protected $table = 'reservasi';
    protected $primaryKey = 'IdPengunjung';
    protected $fillable = ['Transaksi','IdPengunjung','Jmlah_Kamar','Tggl_Masuk','Tggl_Keluar','Lama_Nginap','Totl_Harga'];
}
