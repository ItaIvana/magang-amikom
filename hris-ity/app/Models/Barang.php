<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'stocks';
    protected $fillable = ['kode_barang','nama_barang','stok','harga_barang'];
}
