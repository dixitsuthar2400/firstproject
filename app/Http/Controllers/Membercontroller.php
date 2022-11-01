<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class Membercontroller extends Controller
{
    function addData(Request $req){

        $students = new student;
        $students->name = $req->name;
        $students->email = $req->email;
        $students->course = $req->course;

        if ($req->file('image')) {

            $filepath = $req->file('image');
            $filename = $filepath->getClientOriginalName();
            $path = $req->file('image')->storeAs('/img', time() . $filename, 'public');
            $get = "storage/";
        }

        $students->image =  $get.$path;
        $students->save();
        return redirect('Add');
        
    }

    function show(){

        $data = student::all();
        return view('Add',['students'=>$data]);

    }

}
