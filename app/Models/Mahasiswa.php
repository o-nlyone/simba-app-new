<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mhs',
        'nim',
        'notelp_mhs',
        'jurusan',
        'angkatan',
        'status_mhs',
        'mhs_spesial'
    ];

    
}
