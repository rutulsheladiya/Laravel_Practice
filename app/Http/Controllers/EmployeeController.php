<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;

class EmployeeController extends Controller
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

        // $data = Employee::selectRaw('country,count(employee_id)')->groupby('country')->get();
        // dd($data->toArray());

        // ==========================================================================================================

        // $data = [];
        $allData = "";
        echo "<pre>";
        // 1) all () => return the data in form of collcetion

        // $data = Employee::all();
        // echo "<pre>";
        // print_r($data);

        //-----------------
        // 2) fetching data using ORM & Query Builder
        // $data = Employee::where('Department','=','IT')->orderby('EmployeeId','desc')->get();
        // $allData = $data->toArray();
        // print_r($allData);

        //3) Chunking result
        // Employee::chunk(3,function($empData){
        //      echo "Chunking Data."."<br><br>";
        //      foreach($empData AS $item){
        //        echo $item->FullName;
        //        echo "<br>";
        //      }
        // });
        // // ketli query execute thay che te batavse.
        // \DB::enableQueryLog();
        // $query = \DB::getQueryLog();
        // print_r($query);

        // retrive a single model and Aggregrates
        // 1) find() 2)first() 3)firstwhere() 4)firstor()

        // 1)find()
        // $data = Employee::find(1001)->toArray();
        // echo "<pre>";
        // print_r($data);

        // 2)first()
        // $data = Employee::where('Salary','=',50000)->first()->toArray();
        // print_r($data);

        // 3) firstor()
        // $data = Employee::where('Salary', '=', 1100000)->firstor(function () {
        //     echo "First Data Not Found";
        // });
        // echo $data;

        //    ======================================================================================

        // Retriving and creating model
        // 1)firstorcreate()
        // $data = Employee::firstOrCreate(
        //     ['FullName' => 'Cool'],
        //     ['EmployeeId' => 1016, 'Department' => 'HR', 'Salary' => 44000, 'Gender' => 'Male', 'Age' => 23]
        // );
        // print_r($data);

        // 2) firstornew()
        // $data = Employee::firstOrCreate(
        //     ['FullName' => 'Cool'],
        //     ['EmployeeId' => 1016, 'Department' => 'HR', 'Salary' => 44000, 'Gender' => 'Male', 'Age' => 23]
        // );
        // $data->save();

        //    ======================================================================================

        // * Agreegate Function *

        // 1) max()
        // $data = Employee::where('Department','=','IT')->max('Salary');
        // echo $data;

        // 2) Min()
        // $data = Employee::where('Department','=','IT')->min('Salary');
        // echo $data;

        // 3)sum()
        // $data = Employee::where('Department','=','IT')->sum('Salary');
        // echo $data;

        // 4)AVG()
        // $data = Employee::where('Department','=','IT')->avg('Salary');
        // echo $data;

        // 5)COUNT()
        //  $data = Employee::selectRaw('Department,count(EmployeeId),max(Salary),max(Salary),min(salary)')->groupBy('Department')->get();
        //  print_r($data->toArray());

        //    ======================================================================================

        // *** Crud ***


        // * Insert New Record into database *
        // 1) using class Instance
        // $emp = new Employee;  // create a new instance of Empoyee class
        // $emp->EmployeeId = 1017;
        // $emp->FullName = "Mihir";
        // $emp->Department = "QA";
        // $emp->Salary = 78900;
        // $emp->Gender = "Male";
        // $emp->Age = 40;
        // $emp->save();

        // 2) using create method
        //     $emp = Employee::create([
        //         'EmployeeId' => 1018,
        //         'FullName' => 'Dhenish',
        //         'Department' => 'IT',
        //         'Salary' => 98000,
        //         'Gender'=>'Male',
        //         'Age'=>23
        //     ]);
        //    print_r($emp);


        // * Update Record into database *
        // $emp = Employee::find(1014);
        // $emp->FullName = "Manav";
        // $emp->Department = "IT";
        // $emp->Salary = 1500000;
        // $emp->Gender = "Male";
        // $emp->Age = 20;
        // $emp->save();

        // Massupdate  - jeno department it haise ae badha ni salary 10000 thay jashe
        // Employee::where('Department', '=', 'IT')->update(['Salary' => 10000]);

        // 3) delete data from table using delete()
        // $emp = Employee::find(1018);
        // $emp->delete();

        // delete data using destroy()
        // $emp = Employee::destroy(1013);
        // dd($emp);

        // delete data using querystring
        // $emp = Employee::where('EmployeeId','=',1017)->delete();
        // dd($emp);

         // 4) Truncate Table
            Employee::truncate();
      }
}
