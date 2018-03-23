<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Society\Store::class, function (Faker $faker) {
    return [
        'store_society_id' => $faker->unique(true)->randomElement([1,2,3,4,5,6]),
        'store_section_store_id' => $faker->unique(true)->randomElement([1,2,3,4,5,6]),
        'store_category_store_id' => $faker->unique(true)->randomElement([1,2,3,4,5,6,7,8]),
        'store_product_store_id' => $faker->unique(true)->randomElement([1,2,3,4,5,6,7,8]),
        'store_updated_at' => \Carbon\Carbon::now(),
        'store_created_at' => \Carbon\Carbon::now(),
    ];
});
