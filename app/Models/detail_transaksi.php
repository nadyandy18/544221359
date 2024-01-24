<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $table = 'detail_transaksi';
protected $primaryKey = 'Id_Detail_Transaksi';
protected $fillable = ['Id_Detail_Transaksi','No_Transaksi','No_Kamar'];
}
