<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('chat',function() {
    $this->info("Hello, good evening!");
    $name =  $this->ask("What is your name?");
    $this->line("Hii $name, I am chatbot!");
    $admin = $this->confirm("Are you a admin?");
    if($admin)
    {
        $password = $this->secret("Tell me the password: ");
        if($password == "1234")
        {
            $this->info("Hurray!");
            $guess = $this->anticipate("I think your name is...",["Rutul","Chagan","Sakshi","Dheno"]);
            $this->warn("$guess");
        }
        else
        {
            $this->error("Wrong Password!");
        }
    }
    else
    {
        $this->error("Oops");
    }
})->purpose('Chat bot!');
