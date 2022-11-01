<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Putcontroller extends Controller
{
    function show(Request $req){

        $data = [

            "name"=>$req->name,
            "email"=>$req->email,
            "salary"=>$req->salary,
           
        ];

        DB::table('employees')
        ->where( "id",$req->id)
        ->update($data);

        if($data){
            return response()->json(
                ['Result'=>'Data has been updated']
            );
        }
        else{
            return ['Result'=>'Operation failed'];
        }

    }

    function delete(Request $req){

        $data = [

            "id"=>$req->id
           
        ];

        DB::table('employees')
        ->where( "id",$data['id'])
        ->delete($data);

        if($data){
            return ['Result'=>'Data has been deleted'];
        }
        else{
            return ['Result'=>'Operation failed'];
        }

    }
}
