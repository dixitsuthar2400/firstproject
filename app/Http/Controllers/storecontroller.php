<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storecontroller extends Controller
{
    function storemeb(Request $req){

        $data = $req->input('name');

        $req->session()->flash('name',$data);

        return redirect('user');

    }

}
