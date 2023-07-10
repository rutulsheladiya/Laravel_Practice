<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use Faker\Provider\ar_EG\Person;
use Illuminate\Support\Facades\Validator;

class PersonalController extends Controller
{

    // Function for fetch all data
    function Index()
    {
        $personalData = Personal::all();
        // dd($personalData->count());
        if ($personalData->count() > 0) {
            return response()->json([
                'status' => 200,
                'personaldata' => $personalData
            ], 200);
        } else {
            return response()->json([
                'status' => 400,
                'message' => "No Record Found"
            ], 400);
        }
    }

    // Insert Data
    function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobilenumber' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
            $personal = Personal::create([
                'name' => $request->name,
                'email' =>  $request->email,
                'mobilenumber' => $request->mobilenumber,
                'gender' => $request->gender,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country
            ]);

            if ($personal) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Record Inserted Successfully...'
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Something Went Wrong...'
                ], 500);
            }
        }
    }

    // show single record based on id
    function Show($id)
    {
        $personal = Personal::find($id);
        //  dump($personal->toarray());
        if ($personal) {
            return response()->json([
                'status' => 200,
                'personaldata' => $personal
            ], 200);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Record Not Found!!'
            ], 400);
        }
    }

    //edit (when click on edit button data refill in form)
    function edit($id)
    {
        $personal = Personal::find($id);
        //  dump($personal->toarray());
        if ($personal) {
            return response()->json([
                'status' => 200,
                'personaldata' => $personal
            ], 200);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Record Not Found!!'
            ], 400);
        }
    }

    // update record
    function update(Request $request, $id)
    {
        $personal = Personal::find($id);
        // dd($personal);
        if ($personal) {
            $personal->update([
                'name' => $request->name,
                'email' =>  $request->email,
                'mobilenumber' => $request->mobilenumber,
                'gender' => $request->gender,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'record updated..'
            ], 200);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'record not found..'
            ], 400);
        }
    }


    // delete data
    function delete($id)
    {
        $personal = Personal::find($id);
        if ($personal) {
            $personal->delete($id);
            return response()->json([
                'status' => 200,
                'message' => 'reord deleted...'
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'record not found.'
            ], 404);
        }
    }
}
