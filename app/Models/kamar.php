<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable = ['NO_Kamar','Jenis_Kamar','Harga'];
}
