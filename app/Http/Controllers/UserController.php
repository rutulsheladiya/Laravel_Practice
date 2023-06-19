<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

// for calling api
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

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

    public function callApi()
    {
       // first Api
        // $data = Http::timeout(5)->get("https://reqres.in/api/users?page=1");
        // //    echo "<pre>";
        // //    $allData = $data['data'];
        // //    print_r($allData);
        // //    die;
        // $data = ["collection" => $data["data"]];
        // return view("httpclient", $data);

        // Second API

        $data = Http::get("https://reqres.in/api/register");
        // echo "<pre>";
        // print_r(json_decode($data,true));
        // die;
        $allData = $data['data'];
        // echo "<pre>";
        // print_r($allData);
        return view('httpclient',['collection'=>$allData]);
    }

    function httpRequestMethod(Request $request){
        // return "Form Submitted";
        return $request->all();
    }
}
