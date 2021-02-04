<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    //
    protected $table        = 'merks';
    protected $fillable     = ['merk'];
    protected $hidden       = ['created_at','updated_at'];
    public function figure() {
        return $this->hasMany(\App\Figure::class);
    }
}
