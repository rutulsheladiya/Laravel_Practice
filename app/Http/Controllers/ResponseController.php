<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\register;

class ResponseController extends Controller
{
    public function index()
    {
        //  return back()->withInput();


        // redirect to the other controller method
        // return redirect()->action([register::class, 'test']);

        // Redirecting With Flashed Session Data
        // return redirect('response')->with('status', 'data inserted');

        // json response
            return response()->json([
                'name' => 'Abigail',
                'state' => 'CA',
            ]);

    }
    public function index2()
    {
        return "index2 function called";
    }
}
