<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class showDetail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    // Normal Signature
    // protected $signature = 'showDetail';

    // take Input from user
    // protected $signature = 'showDetail {name}';
    //protected $signature = 'showDetail {name=Rutul}'; // set default value
    //protected $signature = 'showDetail {name?}'; //jo koi input nahi apvi to error apse nai

    // with option
    // protected $signature = 'showDetail {name} {--title=Document}';

    // with shortcut option
    //protected $signature = 'showDetail {name} {--T|title=Document}';

    // command with prompting
    protected $signature = 'showDetail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is Custom Command Create for testing.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $this->line("Custom Command Created");
        // $this->warn("Custom Command Created");
        // $this->error("Custom Command Created");
        // $this->info("Custom Command Created");

        // access input value from command
        // $name = $this->argument('name');
        // $this->info("Hello $name");

        // access name without any input
        //    $name = $this->argument('name');
        //    if($name){
        //     $this->line("Hello $name");
        //    }else{
        //     $this->line("Hello Empty Name.");
        //    }

        // ========================

        // command with option
        // $name = $this->argument('name');
        // $title = $this->option('title');
        // $this->line("Your Name Is $name");
        // if($title){
        //     $this->line("Your Page Title Is $title");
        // }else{
        //     $this->line("Your Page Title Is Document");
        // }

        // command with prompting
        $this->warn('Welcome to this command');
        $name = $this->ask('Please Enter Your Name');
        $this->line("Hey $name Welcome , I am ChatBot");
        $admin = $this->confirm('Are You Admin ? ');
        if($admin){
           $password =  $this->secret('Enter Your Password');
           if($password == 1234){
              $this->info("$name Your Are Logdin Successfully");
           }else{
            $this->warn("OOps! Wrong Password !!!");
           }
        }else{
            $this->info("$name You Are Guest User.");
        }
    }
}
