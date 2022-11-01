<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(Request $req){

        return $req->file('save')->store('imag');

    }
}
