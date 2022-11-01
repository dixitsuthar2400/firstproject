<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

use App\Models\company;
use App\Models\employee;

class Listcontroller extends Controller
{
    function show(){

        // return employee::all();
     
       return employee::find(2)->getDevice;
      
    }
}
    