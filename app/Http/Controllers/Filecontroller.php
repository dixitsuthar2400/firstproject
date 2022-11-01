<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Filecontroller extends Controller
{
     function upload(Request $req){

        $data = [

            "name"=>$req->name,
       
        ];

        $get = DB::table('product')->insertGetId($data);

        $image = $req->file('image');


        foreach($image as $file){

            $imagepath = $file;
            $imagename = $imagepath->getClientOriginalName();
            $path = $file->storeAs('/img',time() . $imagename,'public');
        

            $data1[] = [

            "image"=>'/storage/'.$path,
            "product_id"=>$get

            ];

            $result = DB::table('image')->insert($data1);

            $join = array_merge($data,['Data_of_response'=>$data1]);
        }
            
            if($result){

            $response['data'] = $join;
            $response['message'] = "successfully inserted images";
            $response['status'] = 200 ;
            }
            else{

            $response['data'] = [];
            $response['message'] = "Not found";
            $response['status'] = 404 ;
            }

        return response()->json($response);

    
    }

    // function show(Request $req){


    // }


}

