<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name', 'detail', 'price','category','image','bestdeals'
    ];
}
