<?php

namespace App;
//CARGO
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $table = 'charges';
    //relacion 1 a muchos
    public function employees(){
        return $this->hasMany('app/employe');
    }
}