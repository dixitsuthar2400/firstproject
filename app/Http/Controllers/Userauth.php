<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userauth extends Controller
{
    function userlogin(Request $req){

        $data = $req->input('name');
        $req->session()->put('name',$data);
        return redirect('profile');
    }
}
