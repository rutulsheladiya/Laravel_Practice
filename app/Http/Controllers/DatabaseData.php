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

    function Index()
    {
        $data = '';

        // # Retrieving All Rows From A Table #
        // $data = DB::table('employee')->get();

        // -------------------------------------------------------------------------

        # Retrieving A Single Row / Column From A Table #

        // return first row from the table
        // $data = DB::table('employee')->first();
        // return $data;

        // jeno department it haise tena first record  nu fullname return karse.
        // $data = DB::table('employee')->where('Department','IT')->value('FullName');
        // return $data;

        // to retive a single row by it's id we can use find()
        // $data = DB::table('employee')->find(1007);
        // return $data;

        // retrive a list of column value  => specific koi aek column ni value array na form ma return karse
        // $data = DB::table('employee')->pluck('FullName');
        // return $data;

        // jo be parameter pass karishu tu FullName ne as a key consider karse and EmployeeId ne value tarike consider karse.
        // $data = DB::table('employee')->pluck('EmployeeId','FullName');
        // dd($data);

        // -------------------------------------------------------------------------

        #chunking result
        // - jyare apdi pase vadhare data hoy table ma aene nana small chunk ma fetch karva mare chunk function use thase
        // $data = DB::table('employee')->orderBy('EmployeeId')->chunk(3,function($allData){
        //     echo "Chunk of data"."<br>";
        //    foreach($allData as $Item){
        //       echo $Item->FullName;
        //       echo "<br>";
        //    }
        //    echo "<hr>";
        // });

        // -------------------------------------------------------------------------

        #Aggregates
        // $data = DB::table('employee')->count();
        // return $data;

        // $data = DB::table('employee')->max('EmployeeId');
        // return $data;

        // $data = DB::table('employee')->min('EmployeeId');
        // return $data;

        // $data = DB::table('employee')->sum('EmployeeId');
        // return $data;

        // $data = DB::table('employee')->avg('EmployeeId');
        // return $data;

        // Determining If Records Exist or not we have 2 method exists() doesntExist()
        // if(DB::table('employee')->where('EmployeeId',1009)->exists()){
        //     return "Yes Id 1009 Exist";
        // }

        // if(DB::table('employee')->where('EmployeeId',10001)->doesntExist()){
        //     return "Yes Id 10001 Does Not Exist";
        // }


        // -------------------------------------------------------------------------

        #Select Statements
        // select specific column from the table
        // $data = DB::table('employee')->select('EmployeeId','FullName','Department')->get();
        // return $data;
        //dd($data);

        // distinct()
        // $data = DB::table('employee')->distinct('Department')->get();
        // dd($data);

        // -------------------------------------------------------------------------

        # Where Clause

        //1) jeno department IT hoy and je male hoy tena data return karse.
        // $data = DB::table('employee')
        // ->where('Department','=','IT')
        // ->where('Gender','=','Male')
        // ->get();
        // dd($data);// return $data;

        // Multiple where ni jagya te a rite array banavi ne pass kari shakiye

        // $data = DB::table('employee')
        // ->where([
        //     ['Department','=','IT'],
        //     ['Gender','=','Male'],
        // ])->get();
        // dd($data);

        // select employee whoes name start with A.
        // $data = DB::table('employee')->where('FullName','LIKE','a%')->get();
        // dd($data);


        // orwhere => a orwhere clause or jevu j work karse
        // $data = DB::table('employee')->where('EmployeeId', '=', '1001')->orWhere('Age', '=', 27)->get();
        // dd($data);

        // wherebetween(colname,[range]) between operator jevu kam karse. -jeni age 225 thi 30 ni vacche che ae badha return karse.
        // $data = DB::table('employee')->whereBetween('Age',[25,30])->get();
        // dd($data);

        // orWherebetween('colname',[range]) or jevu j kam karse. jeni empid 1001 thi 1005 ni vachhe haise te or jemni salary 30k to 40k vaccche hasie te badha record return karse.
        //  $data = DB::table('employee')
        //  ->whereBetween('EmployeeId',[1001,1005])
        //  ->orWhereBetween('salary',[30000,40000])
        //  ->get();
        //  dd($data);

        //jeni id 1001 thi 1005 ni vacche haise te or je ni gender female haise te return karse.
        // $data = DB::table('employee')
        //     ->whereBetween('EmployeeId', [1001,1005])
        //     ->orWhere('gender','=','Female')
        //     ->get();
        // dd($data);

        // wherein(colname,[val,val])
        // $data = DB::table('employee')->whereIn('EmployeeId',[1001,1002,1003])->get();
        // dd($data);

        //wherenotin(colname,[val,val])
        // $data = DB::table('employee')->whereNotIn('EmployeeId',[1001,1002,1003,1004,1005])->get();
        // dd($data);

        // wherenull // jena full name null haise te badha record return karse.
        // $data = DB::table('employee')
        //     ->select()
        //     ->whereNull('FullName')
        //     ->get();
        // dd($data);

        // whereNotnull // jena fullname ma null nai hoy te badha record return karse je null haise te return karse nahi.
        // $data = DB::table('employee')->select()->whereNotNull("FullName")->get();
        // dd($data);

        //whereDate
        // $data = DB::table('employee')->select()->whereDate('BirthDate', '2050-12-04')->get();
        // dd($data);

        // whereMonth
        // $data = DB::table('employee')->select()->whereMonth('BirthDate', '05')->get();
        // dd($data);

        //whereDay
        // $data = DB::table('employee')->select()->whereDay('BirthDate', '25')->get();
        // dd($data);

        //return view('DatabaseData/querybuilder',['data'=>$data]);
    }
}
