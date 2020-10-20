<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    //relacion uno a muchos
    public function categories(){
        return $this->hasMany('App/Category');
    }
    public function providers(){
        return $this->hasMany('App/Provider');
    }
    public function users(){
        return $this->hasMany('App/Category');
    }
}
