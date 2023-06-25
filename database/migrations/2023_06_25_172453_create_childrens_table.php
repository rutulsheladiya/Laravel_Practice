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
        Schema::create('childrens', function (Blueprint $table) {
            $table->integer('children_id');
            $table->string('email')->unique()->nullable();
            $table->string('password')->invisible()->nullable();
            $table->string('name');
            $table->float('percentage',3,2)->comment("this column for percentage");
            $table->integer('age')->unsigned();
            $table->string('city')->default('No City');
            $table->timestamps();
            $table->primary('children_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childrens');
    }
};
