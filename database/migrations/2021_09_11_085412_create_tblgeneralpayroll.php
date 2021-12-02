<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblgeneralpayroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblgeneralpayroll', function (Blueprint $table) {
            $table->id('PAYROLLID');
            $table->string('EMPLOYEEID');
            $table->Integer('BASESALARY');
            $table->Integer('NSSF');
            $table->Integer('HESLB');
            $table->Integer('LOAN');
            $table->Integer('ADVANCE');
            $table->Integer('DEDUCTIONS');
            $table->Integer('EARNINGS');
            $table->Integer('NETSALARY');
            $table->string('MONTH');
            $table->string('YEAR');
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
        Schema::dropIfExists('tblgeneralpayroll');
    }
}
