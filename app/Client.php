<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = "clients";
    public function users(){
        return $this->hasMany('App/User');
    }
}
