<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
   protected $fillable = ['name','email','mobilenumber','gender','city','state','country',];

protected $hidden = ['created_at','updated_at'];
// protected $visible = ['id','name'];
}
