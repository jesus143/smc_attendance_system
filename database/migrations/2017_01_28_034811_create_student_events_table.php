<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string("student_id");
            $table->integer("event_id")->unsigned();
            $table->string("status_in")->default('');
            $table->string("status_out")->default('');
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
        Schema::dropIfExists('student_events');
    }
}
