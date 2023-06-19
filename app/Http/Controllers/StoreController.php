<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function StoreUser(Request $request)
    {
        $data = $request->input();
        // $request->session()->flash('username',$request->username);
        // $request->session()->flash('mobile',$request->mobile);
        // $request->session()->flash('email',$request->email);
        $request->session()->flash("userData", ['username'=>$request->username, 'mobile'=>$request->mobile, 'email'=>$request->email]);
        //echo session('userData')['username'];
        // echo session('mobile');
        // echo session('email');
        return redirect('storeuser');
    }
}
