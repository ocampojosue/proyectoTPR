<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $table = "providers";
    public function users(){
        return $this->hasMany('App/Category');
    }
}
