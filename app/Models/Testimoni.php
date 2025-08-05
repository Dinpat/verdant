<?php

// file: app/Models/Testimoni.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'pekerjaan',
        'rating',
        'testimoni',
        'status', // Meskipun default, baik untuk dimasukkan
    ];
}