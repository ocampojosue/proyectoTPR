<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    public function charges(){
        return $this->belongsTo('App/Charge');
    }
    public function detail_invoices(){
        return $this->hasOne('App/Detail_invoice');
    }
}
