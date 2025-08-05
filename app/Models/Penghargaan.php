<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;

    // Ganti 'penghargaan' jika nama tabel Anda berbeda
    protected $table = 'penghargaan';

    protected $fillable = [
        'tahun',
        'nama_penghargaan',
        'penyelenggara',
        'deskripsi',
        'foto',
    ];
}
