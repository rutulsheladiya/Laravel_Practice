<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class DatabaseData extends Controller
{
    function fetchdata()
    {
        $data = Employee::all();
        return view('DatabaseData.studentlist', ['allData' => $data]);
    }
}
