<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Facades\File;


class EmployeeSeeder extends Seeder


{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JSON Data
        // $jsonData = File::get('database/data/employee.json');
        // $empData = collect(json_decode($jsonData));

        // store json data in database using laravel collection
        // $empData->each(function ($emp) {
        //     employee::create([
        //         'name' => $emp->name,
        //         'email' => $emp->email,
        //         'password' => $emp->password,
        //         'mobileno' =>$emp->mobileno,
        //         'birthdate' => $emp->birthdate,
        //         'city' => $emp->city,
        //         'state' => $emp->state,
        //         'country' => $emp->country
        //     ]);
        // });


        // ==============================================================

        // JSON Data
        // $jsonData = File::get('database/data/employee.json');
        // $empData = json_decode($jsonData, true);

        //store json data in database using array
        // foreach ($empData as $emp) {
        //     employee::create([
        //         'name' => $emp['name'],
        //         'email' => $emp['email'],
        //         'password' => $emp['password'],
        //         'mobileno' => $emp['mobileno'],
        //         'birthdate' => $emp['birthdate'],
        //         'city' => $emp['city'],
        //         'state' => $emp['state'],
        //         'country' => $emp['country']
        //     ]);
        // }


        //==============================================================


        // Fake Data
        for($i=1;$i<10;$i++){
            employee::create([
                'name'=>fake()->name(),
                'email'=>fake()->email(),
                'password'=>fake()->md5(),
                'mobileno'=>fake()->phoneNumber(),
                'birthdate'=>fake()->date(),
                'city'=>fake()->city(),
                'state'=>fake()->state(),
                'country'=>fake()->country()
             ]);
        }

    }
}
