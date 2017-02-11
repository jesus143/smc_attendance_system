<?php

use Illuminate\Database\Seeder;

use App\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Student::truncate();

    	factory(Student::class, 10)->create();  
        // $this->call(UsersTableSeeder::class); 
    }
}
