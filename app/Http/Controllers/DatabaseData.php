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
        // $data = DB::table('employee')->select('Department')->distinct('Department')->get();
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
        // $data = DB::table('employee')->select()->where('EmployeeId', '=', 1001)->orWhere('Age', '=', 27)->get();
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
        // $data = DB::table('employee')->select()->whereDay('BirthDate', '04')->get();
        // dd($data);

        // whereyear
        // $data = DB::table('employee')->select()->whereyear('BirthDate', '2020')->get();
        // dd($data);

        // return the component of url
        // $url = "https://www.geeksforgeeks.org/php-parse_url-function/";
        // echo "<pre>";
        // print_r(parse_url($url));
        // die;

        // --------------------------------------------------------------------------------------------------------------------

        // 1) orderby(colname,asc/desc)
        // $data = DB::table('employee')->select()->orderBy('EmployeeId','desc')->get();
        // dd($data);

        // 2) latest(colname) => date pramane result return karse. je latest date haise teno data apse
        // $data = DB::table('employee')->select()->latest('BirthDate')->first();
        // dd($data);

        // 3)oldest(colname) => date pramane je oldest date haise teno record return karse.
        // $data = DB::table('employee')->select()->oldest('BirthDate')->first();
        // dd($data);

        // --------------------------------------------------------------------------------------------------------------------

        # groupby

        //$data = DB::table('employee')->selectRaw('Department,avg(salary) As Salary')->groupBy('Department')->having('Salary','>',30000)->get();
        // $data = DB::table('employee')->selectRaw('Gender,count(EmployeeId)')->groupBy('Gender')->get();
        //$data = DB::table('employee')->selectRaw('Department,count(Gender)')->groupBy('Department','Gender')->having('Gender','=','Male')->get();
        //  dd($data);

        // --------------------------------------------------------------------------------------------------------------------

        # Limit() & Offset()  / Limit() = take() And Offset() ->skip()

        //1) limit(value)
        // $data = DB::table('employee')->select()->limit(5)->get();
        // dd($data);

        // 2) offset(value)
        //  $data = DB::table('employee')->select()->offset(3)->limit(5)->get();
        //  dd($data);

        // 3) take(value)
        // $data = DB::table('employee')->select()->take(5)->get();
        // dd($data);

        // 4) skip(value)
        // $data = DB::table('employee')->select()->skip(2)->take(5)->get();
        // dd($data);

        //return view('DatabaseData/querybuilder',['data'=>$data]);

        // --------------------------------------------------------------------------------------------------------------------

        # Insert Record into table

        //1)insert single record into table
        // $data = DB::table('employee')->insert([
        //      "EmployeeId" => 1012,
        //      "FullName" => "Manan Shah",
        //      "Department" => "OpenSource",
        //      "Salary" => 65000,
        //      "Gender" => "Male",
        //      "Age" => 22,
        //      "BirthDate" => "2020-08-12"
        // ]);
        // dd($data);

        //2) Insert Multiple Record
        // $data = DB::table('employee')->insert([
        //   ["EmployeeId" => 1013,"FullName" => "Ravi Mandani","Department" => "Frontend","Salary" => 150000,"Gender" => "Male","Age" => 34,"BirthDate" => "2001-06-04"],
        //   ["EmployeeId" => 1014,"FullName" => "Rutul Sheladiya","Department" => "Backend","Salary" => 140000,"Gender" => "Male","Age" => 24,"BirthDate" => "2004-12-23"],
        //   ["EmployeeId" => 1015,"FullName" => "Purvish Dhameliya","Department" => "Frontend","Salary" => 250000,"Gender" => "Male","Age" => 74,"BirthDate" => "2010-03-18"],
        //   ["EmployeeId" => 1016,"FullName" => "Sumit Rajput","Department" => "Backend","Salary" => 550000,"Gender" => "Male","Age" => 74,"BirthDate" => "1998-12-20"]
        // ]);

        // 3) insertIgnore() => jyare koi id pk che and alredy add thayeli d upr jo insert kariye to constraint violation ni error ave. te error ne ignore karva mate insertIgnore() no use thase.
        // $data = DB::table('employee')->insertOrIgnore([
        //      "EmployeeId" => 1001,
        //      "FullName" => "Kerul Shah",
        //      "Department" => "HR",
        //      "Salary" => 65000,
        //      "Gender" => "Male",
        //      "Age" => 90,
        //      "BirthDate" => "2023-12-09"
        // ]);
        // dd($data);

        // --------------------------------------------------------------------------------------------------------------------

        # Update Record into table
        // $data = DB::table('employee')->where('EmployeeId','=',1006)->update([
        //     "FullName" => "Mansi Patel",
        //     "Department" => "HR"
        // ]);
        // dd($data);

        // --------------------------------------------------------------------------------------------------------------------
        # Joins

        // 1) Innerjoin

        // $data = DB::table('Employee AS e')
        // ->select('e.EmployeeId','e.FullName','e.Department','a.City','a.State','a.Country')
        // ->join('Address AS a','e.EmployeeId','=','a.EmployeeId')
        // ->get();
        // echo "<pre>";
        // print_r($data);


        //  $data = DB::table('Employee')
        //  ->select('Employee.EmployeeId','Employee.FullName','Employee.Department','Address.City','Address.State','Address.Country')
        //  ->join('Address','Employee.EmployeeId','=','Address.EmployeeId')
        //  ->join('Projects','Address.EmployeeId','=','Projects.EmployeeId')
        //  ->orderBy('Employee.EmployeeId')
        //  ->get();
        //  echo "<pre>";
        //  print_r($data);

        // 2) LeftJoin
        // $data = DB::table('Employee As e')
        // ->select('e.EmployeeId','e.FullName','e.Department','p.ProjectName','p.StartDate','p.EndDate')
        // ->leftJoin('Projects As p','e.EmployeeId','=','p.EmployeeId')
        // ->get();
        // echo "<pre>";
        // print_r($data);

        //3) RightJoin
        // $data = DB::table('Employee As e')
        // ->select('e.EmployeeId','e.FullName','e.Department','p.ProjectName','p.StartDate','p.EndDate')
        // ->rightJoin('Projects As p','e.EmployeeId','=','p.EmployeeId')
        // ->get();
        // echo "<pre>";
        // print_r($data);

        //4) cross join
        // $data = DB::table('Employee AS e')->crossJoin('Address AS a')->orderBy('e.EmployeeId','ASC')->get();
        // echo "<pre>";
        // print_r($data);

        //5)Natural join => natural join means banne table ma koi aek field common hovi joiye banne table ma koi aek field ni name same hovu joiye
    }
}
