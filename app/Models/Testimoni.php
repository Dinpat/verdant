<?php

// app/Models/Testimoni.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    
    protected $fillable = ['nama', 'email', 'pesan', 'status'];
}