<?php

namespace App\Console\Commands;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class NewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmd';
    // ?: optional arguement
    // =: default arguement
    // *: multiple inputs

    //Options
    //

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My new command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

        // $fname = $this->argument('fname');
        // $lname = $this->argument('lname');
        // $this->line("Your first name is: $fname and last name is: $lname" );


        // $name = $this->argument('name');
        // $opt = $this->option('role');
        // if ($this->option('role')) {
        //     $this->line("$name is a $opt");
        // }
        // else {
        //     $this->line("$name is $opt");
        // }

        // $this->table(
        //     ['Name','Mail'],
        //     Personal::all('name','email')->toArray()
        // );

        Log::info("Command Executed");
    }
}
