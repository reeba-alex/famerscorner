<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public $fillable=['name','cardno','balance','exmonth','exyear','cvv'];
}
