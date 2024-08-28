<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlets';
    protected $fillable = ['nama_outlet','lokasi_outlet','nama_pj'];
}
