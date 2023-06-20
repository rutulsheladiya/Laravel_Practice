<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class register extends Controller
{
    function getData(Request $req)
    {
        // set validation custom msg
        $req->validate([
            'name'=>'required',
            'mobile'=>'required|numeric|max_digits:10|min_digits:10',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'confirmPassword'=>'required|same:password',
            'image'=>'required|mimes:jpg,png,jpeg',
            'gender'=>'required',
            'hobbies'=>'required|min:2'
        ],
        [
            'name.required' => 'Please Enter The Name.',
            'mobile.required' => 'Please Enter The Mobile Number',
            'mobile.numeric' => 'Please Enter The Numeric Value In Mobile Number',
            'mobile.min_digits' => 'Mobile Number Required Minimum 10 Digits',
            'mobile.max_digits' => 'Mobile Number Not Contain More Than 10 Digits',
            'email.required'=>'Please Enter The Email Address.',
            'email.email'=>'Please Enter The Valid Email Address.',
            'password.required'=>'Please Enter The Password.',
            'password.min'=>'Password must be 6 character long',
            'confirmPassword.required'=>'Please Enter The Confirm Password.',
            'confirmPassword.same'=>'Password And Confim Password Must Be Same',
            'image.required'=>'Please Select The Image',
            'image.mimes'=>'Please Select Only JPG,PNG,JPEG Format',
            'gender.required'=>'Please Select The Gender',
            'hobbies.required'=>'Please Select The Hobbies',
            'hobbies.min'=>'Please Select Minimum Two Hobbies',
        ]);

        // $req->validate([
        //     'name'=>'required',
        //     'mobile'=>'required|numeric|max_digits:10|min_digits:10',
        //     'email'=>'required|email',
        //     'password'=>'required|min:6',
        //     'confirmPassword'=>'required|same:password',
        //     'image'=>'required|mimes:jpg,png,jpeg',
        //     'gender'=>'required',
        //     'hobbies'=>'required|min:2'
        //      // 'mobile'=>'required|numeric|min:10|max:10'
        //     // 'password'=> ['required','confirmed' , Password::min(1)->letters(),Password::min(1)->mixedCase(),Password::min(1)->numbers(),Password::min(1)->symbols()]
        // ]);

        return $req->input();
        // return $req->all();
        // echo "<pre>";
        // print_r($req->input());
    }

    public function test()
    {
        return "Test called";
    }
}
