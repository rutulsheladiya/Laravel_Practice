<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RequestController extends Controller
{
    public function requestData(Request $request)
    {
        //dd($request->input());
        // dd($request->path()); // kaya route upar thi request ave che te path apse. sendRequestdata
        //dd($request->url());  // current url return karse. http://127.0.0.1:8000/sendRequestdata
        //dd($request->method());  // je request ave che teni method kai che get ke post te return karse. POST

        // - isMethod() thi apde check kari shakiye je request ma method aveli che tena upr shu task perform karva che te
        // if($request->isMethod('POST')){
        //     dd("Yes It's an POST method");
        // }else{
        //     dd("Yes It's Not POST method");
        // }

        //dd($request->header());   //return all record.
        //dd($request->bearerToken()); // return barearToken
        //dd($request->ip()); // user nu ip return karse
        //dd($request->getAcceptableContentTypes()); //  je content type available che te return karse.

        // if($request->accepts(['text/html','application/json'])){
        //        dd("true");
        // } // accepts method no use thase ke apde specific format na data j jota hoy to je data male che tene check karva mate accepts method use thase.

        //dd($request->query()); // jo url ma jetli value ave che te badhi fetch karvi hoy to query() array na form ma badhu quuery string return karse.
        //dd($request->query());  //get method haise to j data accept. kre  url ma je query string or id haise tene fetch karse. jo url ma kai nai hoy to null apde pan apde default pan set kari shakiye.
        //dd($request->host());
    }
    // public function Index2(Request $request, $id)
    // {
    //     dd($id);
    // }


    // path Inspection | url ma must admin thi start j thavu joiye
    // public function Index3(Request $request)
    // {
    //     if ($request->is('admin/*')) {
    //         dd("admin area");
    //     } else {
    //         dd("Guest area");
    //     }
    // }

    // for name route
    // public function Index4(Request $request)
    // {
    //     if ($request->routeIs('adminn.*')) {
    //         dd("admin area for name route");
    //     } else {
    //         dd("Guest area for name route");
    //     }

    //     // dd($request->routeIs('adminn.one'));  => jo name route sathe mathch thase to true apse nkr false
    // }

    public function getFormData(Request $request)
    {
        dump($request->all());
        dump($request->input());
        dump($request->collect());

        // * fetch the date */
         //dump($request->date('bdy'));

        // * a method check karse field mathi data ave che ke nai */
        // if($request->filled('username')){
        //  echo "name ave che";
        // }else{
        //     echo "nthi avtu";
        // }


        // * fetch img from input * //
       // dump($request->file('profile'));
        //  dump($request->profile);
        // echo $request->profile;
        // if($request->file('profile')->isValid()){
        //     echo "valid";
        // }else{
        //     echo "not valid";
        // }

        // * give path of img */
        // $path = $request->profile->path();
        // echo $path;

        // * extension of img */
        // $ext = $request->profile->extension();
        // echo $ext;

        // * check krse request ma img ave che ke nai */
        // if ($request->hasFile('profile')) {
        //     echo "photo che";
        // } else {
        //     echo "nthi";
        // }


        // * store image in folder * //
        // dump($request->file('profile'));
        // $path = $request->profile->store('Media');
        // echo $path;


        // * store multiple image in folder * //
        // dump($request->file('profile'));
        //dd($request->profile); // getting multiple img from frontend
        foreach ($request->profile as $file) {
            $path = $file->store('Media');
            $paths[] = $path;
        }
        print_r($paths);

        // session()->flash('status','submit successfully');
        // return redirect('request');
    }
}
