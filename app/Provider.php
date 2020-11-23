<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $primaryKey='id_provider';
    protected $table = "providers";
    public function users(){
        return $this->hasMany('App/Category');
    }
}
