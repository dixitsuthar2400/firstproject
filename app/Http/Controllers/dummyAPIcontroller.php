<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\employee;

class dummyAPIcontroller extends Controller
{
    function getData(){

        return employee::all();

        // return DB::table('employees')->get();
    }

    function search(Request $req){

        $data = DB::table('devices')
        // ->select("*")
        ->where("name","like","%".$req->name."%")
        ->get();
        
        
        if($data){
            return response()->json(
                ["data"=>$data,'Result'=>'Data has been search','status'=>true]
            );
        }
        else{
            return response()->json(
                ["data"=>$data,'Result'=>'operation failed','status'=>false]
            );
        }

    }
}
