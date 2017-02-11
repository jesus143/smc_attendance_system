<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password; 
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Student::class, function (Faker\Generator $faker) {

    static $password; 

    $religion = ['Christian', 'Muslim']; 
    $course = ['BSBA', 'CECS', 'COC']; 
    return [ 
    'id_number' => $faker->firstName,
    'first_name' =>  $faker->firstName,
    'last_name' =>  $faker->lastName,
    'mobile_number' =>  $faker->phoneNumber,
    'religion' =>  $religion[rand(0,count($religion)-1)],
    'year_level' =>  rand(1,4),
    'course' =>  $course[rand(0, count($course)-1)],
    'gender' =>  'Male',
    'bio' =>  $faker->paragraph,
    ];
});

$factory->define(App\Personnel::class, function (Faker\Generator $faker) {

    static $password; 

    $department = ['COC', 'CECS', 'CON', 'CAS'];  
    return [  
    'first_name' =>  $faker->firstName,
    'last_name' =>  $faker->lastName,
    'mobile_number' =>   $faker->phoneNumber,
    'position' =>  $faker->jobTitle,  
    'department' =>  $department[rand(0,count($department)-1)], 
    'gender' =>  'Male', 
    ];
});
