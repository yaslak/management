<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Recover\Recover::class, function (Faker $faker) {
    return [
        'email' => true,
        'created_at' => Carbon\Carbon::now(),
    ];
});
