<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_invoice extends Model
{
    //
    public function employees(){
        return $this->belongsTo('App\Employee');
    }
}