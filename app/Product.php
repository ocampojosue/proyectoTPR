<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function providers(){
        return $this->belongTo('App/Provider');
    }
    public function brands(){
        return $this->belongTo('App/Brand');
    }
}
