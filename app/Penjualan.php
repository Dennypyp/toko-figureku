<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table        = 'penjualans';
    protected $fillable     = ['jumlah','total', 'bayar'];
    protected $hidden       = ['created_at','updated_at'];
}
