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

    // =================================
    // function for blade template
    function loadView()
    {
        //   return view("users",["name"=>"Rutul"]);
        // return view("users",["names"=>"Rutul"]);
        // $data = ['Rutul', 'Ravi', 'Purvish','Priyank'];

        // convert json data into php array
        //$jsonData = '{"firstName": "John","lastName": "Doe","age": 50,"eyeColor": "blue"}';
        // $arr = json_decode($jsonData,true);
        // dd($arr);

        // convert php array into json object
        $data = array(
            "id" => 1,
            "name" => "Rutul",
            "mobile" => 8320893080
        );
        // $json = json_encode($data, true);
        // dd($json);

        return view('users', ["name" => $data]);
    }
}
