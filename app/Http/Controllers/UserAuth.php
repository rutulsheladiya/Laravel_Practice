<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $request){
       $data = $request->input('username');
       $request->session()->put('userName',$data);
     //  echo session('userName');
     return redirect('session/profile');
    }
}
