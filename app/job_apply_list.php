<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_apply_list extends Model
{
    protected $fillable = ['job_id','name','email','address','city','file','number'];
}
