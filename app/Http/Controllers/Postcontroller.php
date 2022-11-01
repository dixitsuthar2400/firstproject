<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class Postcontroller extends Controller
{
    function addData(Request $req){

        // $employee = new employee;
        // $employee->name = $req->name;
        // $employee->email = $req->email;
        // $employee->salary = $req->salary;
        // $result = $employee->save();
     
        $data = [
            "name"=>$req->name,
            "email"=>$req->email,
            "salary"=>$req->salary
        ];

        DB::table('employees')->insert($data);

        if($data){
            return ['Result'=>'Data has been saved'];
        }
        else{
            return ['Result'=>'Operation failed'];
        }
        
    }

    function testData(Request $req){

        $rules = [

            "name"=>"required",
            "email"=>"required",
            "salary"=>"required"
        ];

        $validator = Validator::make($req->all(),$rules);

        if($validator->fails()){

            return response()->json($validator->errors(),401);

        }
        else{

            $data = [
                "name"=>$req->name,
                "email"=>$req->email,
                "salary"=>$req->salary
            ];
    
            DB::table('employees')->insert($data);
    
            if($data){
                return response()->json(["data"=>$data,"Result"=>"Data has been inserted","status"=>true]);
            }
            else{
                return response()->json(["data"=>$data,"Result"=>"operation failed","status"=>false]);
            }

        }

    }
}
