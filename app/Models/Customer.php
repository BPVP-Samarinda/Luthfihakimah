<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'Customer';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'alamat',
        'hp',
        'foto',
    ];
}
