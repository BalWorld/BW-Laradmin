<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobResponse extends Model
{
    protected $table = 'jobresponses';
    protected $fillable = ['name','email','phone','file','job','status'];
}
