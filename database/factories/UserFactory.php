<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

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
$recover = new App\Model\Recover\Recover();
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'dtn' => $faker->unique()->date(),
        'sex' => 'homme',
        'address' => $faker->unique()->streetAddress,
        'house_nbr' => $faker->unique()->buildingNumber,
        'city' => $faker->city,
        'tel' => $faker->unique()->phoneNumber,
        'recover_id' => $faker->unique()->numberBetween($min = 1, $max = 52),
        'society_id' => $faker->numberBetween($min = 1, $max = 6),
        'post_id' => $faker->unique()->numberBetween($min = 1, $max = 52),
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now(),
    ];
});
