<?php

// app/Models/Penghargaan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;

    // TAMBAHKAN BARIS INI
    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'gambar'];
}
