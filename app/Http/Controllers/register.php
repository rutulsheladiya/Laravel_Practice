<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    function getData(Request $req)
    {
        echo "<pre>";
        print_r($req->input());
        // return $req->input();
    }
}
