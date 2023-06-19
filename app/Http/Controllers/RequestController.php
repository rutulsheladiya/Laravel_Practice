<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RequestController extends Controller
{
    public function requestData(Request $request)
    {
        //dd($request);
        //dd($request->path()); // kaya route upar thi request ave che te path apse. sendRequestdata
        // dd($request->url());  // current url return karse. http://127.0.0.1:8000/sendRequestdata
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

        dd($request->query()); // jo url ma jetli value ave che te badhi fetch karvi hoy to query() array na form ma badhu quuery string return karse.
        //dd($request->query('name','default set'));  //url ma je query string or id haise tene fetch karse. jo url ma kai nai hoy to null apde pan apde default pan set kari shakiye.
    }
    public function Index2(Request $request, $id)
    {
        dd($id);
    }


    // path Inspection | url ma must admin thi start j thavu joiye
    public function Index3(Request $request)
    {
        if ($request->is('admin/*')) {
            dd("admin area");
        } else {
            dd("Guest area");
        }
    }

    // for name route
    public function Index4(Request $request)
    {
        if ($request->is('admin/*')) {
            dd("admin area for name route");
        } else {
            dd("Guest area for name route");
        }
    }
}
