<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    //relacion 1 a muchos
    public function brands(){
        return $this->hasMany('App/Product');
    }
}
