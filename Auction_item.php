<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction_item extends Model
{
    public $fillable=['farmerid','toolname','image','des','start','price','status'];
}
