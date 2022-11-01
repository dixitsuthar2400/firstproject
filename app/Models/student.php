<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    // public $connection = "mysql2";
    public $timestamps = false;

    // public function setfnameAttribute($value){

    //     return $this->attributes['fname'] = 'Mr' . $value; 
    // }

}
