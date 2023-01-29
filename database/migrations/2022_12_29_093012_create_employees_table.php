<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dep_id');
            $table->bigInteger('position_id');		
            $table->string('f_name',100);	
            $table->string('l_name',100);	
            $table->string('image',100);	
            $table->string('gender',10);	
            $table->date('dob');
            $table->string('Phone',20)->unique();	
            $table->string('address');
            $table->float('monthly_salary');		
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
