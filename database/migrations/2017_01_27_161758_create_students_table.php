<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string("id_number"); 
            $table->string("first_name");
            $table->string("last_name"); 
            $table->string("mobile_number");
            $table->string("religion"); 
            $table->string("year_level"); 
            $table->string("course"); 
            $table->string("gender"); 
            $table->string("bio"); 
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
        Schema::dropIfExists('students');
    }
}
