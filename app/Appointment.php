<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

    public function prescription(){
        return $this->hasMany('App\Prescription');
    
    }
    public function doctor(){
        return $this->belongsTo('App\Doctor');
    
    }
}
