<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Device;
use App\Models\student;

class Multiplecontroller extends Controller
{
    function show(){

        return student::all();

        // return DB::connection('mysql2')->table('students')->get();

    }
}
