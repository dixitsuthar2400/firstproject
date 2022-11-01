<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Memberdltcontcontroller extends Controller
{
    function list(Request $req){

        $data = student::all();
        return view('Listdlt',['students'=>$data]);
    }

    function delete($id){

        $data = student::find($id);
        $data->delete();
        return redirect('Listdlt');
    }

    function showdata($id){

        $data = student::find($id);
        return view('edit',['data'=>$data]);
        
    }

    function update(Request $req){

        $data = student::find($req->id);

        $data->First_name = $req->First_name;
        $data->Last_name = $req->Last_name;
        $data->save();
        return redirect('Listdlt');

    }

}
    