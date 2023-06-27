<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class seederdata extends Controller
{
    function Index()
    {
        //Employee::all(); // collection na form ma data return karse. array na form ma jota hoy to toArray() use krvu atle badha aaray na form ma apse data.
        //   dd(Employee::all()->toArray());

        //fetch collection data in form of array
        // foreach (Employee::all() as $data) {
        //     echo "<br>";
        //     echo $data->name;
        // }

        $data =Employee::selectRaw('country,count(employee_id)')->groupby('country')->get();
         dd($data->toArray());
    }
}
