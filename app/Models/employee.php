<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    public $timestamps = false;

    // function getDevice(){

    //     return $this->hasMany('App\Models\Device');
    // }
}
