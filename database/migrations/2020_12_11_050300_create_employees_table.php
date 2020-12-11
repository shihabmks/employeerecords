<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('emp_code')->unique();
            $table->string('emp_name');
            $table->date('emp_doj')->nullable();;
            $table->string('emp_department')->nullable();;
            $table->string('emp_position')->nullable();;
            $table->string('emp_reporting_to')->nullable();;
            $table->boolean('emp_status')->default(0);
            $table->rememberToken();
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
}
