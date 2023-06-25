<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('student', function (Blueprint $table) {
           // $table->renameColumn('studentName','Student_Name');
            $table->string('studentName',100)->change();
            $table->after('mobileNo',function(Blueprint $table){
                $table->string('city',20);
                $table->string('state',20);
                $table->string('country',20);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            //
        });
    }
};
