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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id');
            $table->float('monthly_salary')->nullable();		
            $table->float('total_allowance')->nullable();		
            $table->float('total_deductions')->nullable();		
            $table->float('total_bonus')->nullable();		
            $table->integer('total_attendance')->nullable();		
            $table->integer('total_leave')->nullable();		
            $table->float('total_payable')->nullable();		
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
        Schema::dropIfExists('payrolls');
    }
};
