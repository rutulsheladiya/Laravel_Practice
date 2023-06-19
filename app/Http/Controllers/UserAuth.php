<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $request)
    {
        $data = $request->input();
        //echo $data;
        $request->session()->put('username', $request->username);
        $request->session()->put('role', $request->role);
        //$request->session(['username' => $request->username, 'role' => $request->role]);
        return redirect('profile');

        // session Has()
        // if($request->session()->has('username')){
        //     echo "true";
        //  }else{
        //      echo "false";
        //  }

        // session exists()
        // if (session()->exists('saddsad')) {
        //     echo "true";
        // } else {
        //     echo "false";
        // }
    }
}
