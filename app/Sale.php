<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $table = "sales";

    public function clients(){
        return $this->hasMany('App/Client');
    }
    public function products(){
        return $this->hasMany('App/Product');
    }
    public function users(){
        return $this->hasMany('App/User');
    }

}
