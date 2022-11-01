<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\dummyAPIcontroller;

use App\Http\Controllers\Postcontroller;

use App\Http\Controllers\Putcontroller;

use App\Http\Controllers\Democontroller;

use App\Http\Controllers\Authcontroller;

use App\Http\Controllers\Filecontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::apiResource("demo",Democontroller::class);

    });

Route::get("data",[dummyAPIcontroller::class,'getData']);
Route::post("add",[Postcontroller::class,'addData']);
Route::put("update",[Putcontroller::class,'show']);
Route::get("search",[dummyAPIcontroller::class,'search']);
Route::post("validate",[Postcontroller::class,'testData']);

Route::post("login",[Authcontroller::class,'index']);

Route::post("upload",[Filecontroller::class,'upload']);
