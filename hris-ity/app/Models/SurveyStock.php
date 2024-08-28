<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyStock extends Model
{
    protected $table = 'survey_stocks';
    protected $fillable = ['nama_sales','nama_barang','nama_outlet','jumlah_stok','jumlah_display','visit_datetime'];
}
