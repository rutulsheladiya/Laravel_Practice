<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Register;
class factorydata extends Controller
{
 function fetchFactoryData(){
    //   dd(Register::find(1));
     $data =  DB::table('registers')->get();
    //  echo "<pre>";
    //  print_r($data->toArray());
    return view('Factory/factorydata',['collection'=>$data]);
 }
}
