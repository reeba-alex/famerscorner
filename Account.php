<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
        public $fillable=['email','password','role','online','status','remember_token'];
}
