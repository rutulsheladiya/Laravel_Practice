<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    public function userData()
    {
        // return "<h3>UserController Called</h3>";
        return view("user");
    }

    public function showProfile($id, $name)
    {
        return view("userProfile", ["userId" => $id, "userName" => $name]);
    }

    // set default Value
    // public function showProfile($id=27,$name="Rutul")
    // {
    //     return view("userProfile",["userId"=>$id,"userName"=>$name]);
    // }
}
