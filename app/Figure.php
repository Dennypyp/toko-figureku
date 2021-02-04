<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    //
    protected $table        = 'figures';
    protected $fillable     = ['figure','harga','hargabeli'];
    protected $attributes   = ['stock' => 0,];
    protected $hidden       = ['created_at','updated_at'];
    public function merk() {
        return $this->belongsTo(\App\Merk::class,'merk_id');
    }
    
}
