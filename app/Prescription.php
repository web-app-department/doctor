<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = ['user_id','doctor_id','appointment_id','short_presception','presception','name','age','come_after'];

}
