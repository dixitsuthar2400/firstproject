<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Userauth;
use App\Http\Controllers\storecontroller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Listcontroller;
use App\Http\Controllers\Membercontroller;
use App\Http\Controllers\Devicecontroller;

use App\Http\Controllers\Multiplecontroller;
use App\Http\Controllers\Ajaxcontroller;

use App\Mail\SampleMail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// $info = "hi, let's learn laravel.";
// // $info = Str::ucfirst($info);
// // $info = Str::replacefirst("Hi","Hello",$info);
// // $info = Str::camel($info);

// $info = Str::of($info)->ucfirst($info)->replacefirst("Hi","Hello",$info)->camel($info);

// echo $info;
Route::get('/', function () {

    // return view('welcome');
    return view('welcome');
});


// Route::get("list",[Multiplecontroller::class,'show']);

// Route::get("device/{key:name}",[Devicecontroller::class,'show']);
// Route::get("Add",[Membercontroller::class,'show']);

// Route::view('/profile',"profile"); 

// Route::get('/profile/{lang}', function ($lang) {
//     App::setLocale($lang);
//     return view('profile');
// });

// Route::get("Listdlt",[Memberdltcontcontroller::class,'list']);
// Route::get("delete/{id}",[Memberdltcontcontroller::class,'delete']);
// Route::get("edit/{id}",[Memberdltcontcontroller::class,'showdata']);
// Route::post("edit",[Memberdltcontcontroller::class,'update']);

// Route::view('/List',"List"); 

// Route::get('/demo', function () {
//     return view('demo');
// });

// Route::get('/user/{name}', function ($name) {
//     return view('users',['name'=>$name]);
// });

// Route::view("demo",'/demo');
// Route::view("demo1",'/demo1');

// Route::view('/about',"about");   

// Route::view('/login',"users"); 

// Route::get('/logout', function(){

//     if(session()->has('name')){

//         session()->pull('name',null);
//     }
//     return redirect('login');
// });

// Route::get('/login', function(){

//     if(session()->has('name')){

//         return redirect('profile');
//     }
//     return view('users');
    
// });

// Route::view('/login',"users");

// Route::view('/home',"home");

// Route::view('/users',"users")->middleware(['protect']);

// Route::view('/Noaccess',"Noaccess");

// Route::group(['middleware'=>['page']],function(){
//     Route::view('/users',"users");
// });

Route::resource("Ajax",Ajaxcontroller::class);
// Route::get("/show",[Ajaxcontroller::class,'show']);