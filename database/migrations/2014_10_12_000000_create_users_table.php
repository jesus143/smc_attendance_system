<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('email')->unique();
            $table->string('password')->default(''); 
            $table->string('id_number')->default(''); 
            $table->string('first_name')->default(''); 
            $table->string('last_name')->default(''); 
            $table->string('year_level')->default('1'); 
            $table->string('college')->default(''); 
            $table->string('type')->default('student'); 
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
        Schema::drop('users');
    }
}
