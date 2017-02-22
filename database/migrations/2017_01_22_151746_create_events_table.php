<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name')->default("");
            $table->string('venue')->default("");
            $table->string('priest_name')->default();
            $table->string('description')->default("");
            
            $table->string('sponsor_personnels')->default("");
            $table->string('sponsor_students')->default("");
            $table->string('sponsor_collge')->default("");
            $table->string('sponsor_year')->default(""); 

            $table->string('participant_collge')->default("");
            $table->string('participant_religion')->default("");
            $table->string('participant_year')->default(""); 
            $table->string('participant_personnels')->default("");
            $table->string('type')->default("");

            $table->dateTime('date_time_start');
            $table->dateTime('date_time_end');

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
        Schema::dropIfExists('events');
    }
}
