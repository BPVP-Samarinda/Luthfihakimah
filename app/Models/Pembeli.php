<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table='Pembeli';
    
    protected $fillable = [
        'nama_lengkap',
        'pembelian',
        'deskripsi',
    ];
}
