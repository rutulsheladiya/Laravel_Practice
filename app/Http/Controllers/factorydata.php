<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
class factorydata extends Controller
{
 function fetchFactoryData(){
   $data = Register::paginate(15);
    //  $data =  DB::table('registers')->get();
    // $data =  $data->paginate(5);
    //  echo "<pre>";
    //  print_r($data->toArray());
    return view('Factory/factorydata',['collection'=>$data]);
 }
}
