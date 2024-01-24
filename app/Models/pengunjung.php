<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $primaryKey = 'ID_Pengunjung';
    protected $fillable = ['ID_Pengunjung','Nama_Pengunjung','Alamat','No_Telpon','No_KTP'];
}
