<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\student;

use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    function operation(Request $req){

        return DB::table('employee')
        ->join('company','employee.emp_com', '=' ,'company.c_id')
        ->where('employee.emp_id',1)
        ->get();

        // foreach($get as $rr)

        // $arrayName = array 
        // (
        //     'emp_id' => $rr->emp_id,
        //     'emp_name' => $rr->emp_name,
        //     'emp_com'=> $rr->emp_com,
        //     'name' => $rr->name,


        // );
        // print_r($arrayName);exit();


    
    }
}