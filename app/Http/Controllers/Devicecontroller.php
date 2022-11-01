<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Device;

class Devicecontroller extends Controller
{
    function show(Device $key){

        return $key;

        
    }
}
