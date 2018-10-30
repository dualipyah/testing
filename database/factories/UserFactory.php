<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/



$factory->define(App\User::class, function (Faker $faker) {
    /*return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];*/
	
	return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('p@ssw0rd'), // secret
        'remember_token' => str_random(10),
		 ];
});

$factory->define(App\Profile::class, function (Faker $faker) {
   
	return [
        'firstname' => $faker->firstname,
        'lastname' =>  $faker->lastname,
		'middlename' =>  $faker->firstname,
        'gender' => $faker->randomElement(['Male','Female']),
        'birthdate' => $faker->date($format = 'Y-m-d',$max='now'),
		 ];
});
/*
$factory->define(App\User::class, function (Faker\Generator $faker) {
    /*return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
	
	return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('p@ssw0rd'), // secret
        'remember_token' => str_random(10),
		 ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    /*return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
	
	return [
        'firstname' => $faker->firstname,
        'lastname' =>  $faker->lastname,
		'middlename' =>  $faker->middlename,
        'gender' => $faker->randomElement(['1','2']),
        'birthdate' => $faker->date($format = 'Y-m-d',$max='now'),
		 ];
});
*/