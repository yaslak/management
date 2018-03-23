<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Society\Society::class, function (Faker $faker) {
    return [
        'society_name'=>$faker->unique()->company,
        'society_domain'=>$faker->bs,
        'society_email'=>$faker->companyEmail,
        'society_licence'=> $faker->unique()->bs,
        'society_address'=> $faker->unique()->streetName,
        'society_build'=> $faker->unique()->buildingNumber,
        'society_zip'=> $faker->unique()->postcode,
        'society_city'=> $faker->city,
        'society_tel'=> $faker->unique()->e164PhoneNumber,
        'society_speaker'=> $faker->unique()->firstNameFemale,
        'society_turnover'=> rand(10000,100000),
        'society_limit'=> $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 120 days') ,
        'society_range'=> rand(30,500),
        'society_status'=> rand(0,1),
        'society_cover_id'=> $faker->unique()->biasedNumberBetween(1,12),
        'society_logo_id'=> $faker->unique()->biasedNumberBetween(1,12),
        'society_created_at' => \Carbon\Carbon::now(),
        'society_updated_at' => \Carbon\Carbon::now(),
    ];
});
