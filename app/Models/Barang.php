<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Tentukan kolom mana saja yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_barang', 
        'jenis_barang', 
        'stock', 
        'status', 
        'harga_satuan'
    ];
}
