<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\test;

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

Route::get('/', function () {
    return redirect("about");
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/usersview/{name}', function ($name) {
    return view('usersview',['username'=>$name]);
});

//this can not pass data
Route::view("contact",'contact');

//Call for the controllers
Route::get("users/{user}",[users::class,'index']);

Route::get("test",[test::class,'viewload']);
