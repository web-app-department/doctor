<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
    protected $fillable = ['title', 'company_name','departmant','job_resposibilities','education_requirments','additaional_requirments','vacancy','salary','apply_process', 'type', 'des','short_des', 'deadline', 'social', 'location', 'workplace', 'tags', 'status'];
}
