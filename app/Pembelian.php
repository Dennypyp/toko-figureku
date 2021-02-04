<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //
    protected $table        = 'pembelians';
    protected $fillable     = ['jumlah','total', 'bayar'];
    protected $hidden       = ['created_at','updated_at'];

}
