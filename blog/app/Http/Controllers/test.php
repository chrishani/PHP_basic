<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    function viewload() {
        $data = ['anil','peter','sam'];
        return view('testview',['users'=>$data]);
    }
}
