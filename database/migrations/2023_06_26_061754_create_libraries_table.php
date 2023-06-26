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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id('library_id');
            $table->unsignedBigInteger('stud_id');
            $table->foreign('stud_id')->references('student_id')->on('students');
            $table->string('bookname');
            $table->date('due_date')->nullable();
            $table->boolean('status');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
