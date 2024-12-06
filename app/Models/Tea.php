<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    use HasFactory;

    // Jika tabel di database tidak menggunakan konvensi plural (misalnya 'teas'), Anda bisa mendefinisikan nama tabel secara eksplisit:
    protected $table = 'teas';  // Pastikan nama tabelnya benar
    
    // Tentukan kolom mana yang bisa diisi
    protected $fillable = ['name', 'description', 'price', 'image'];
}
