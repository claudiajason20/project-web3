<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => '$2y$10$.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'id_city' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ];
});

$factory->define(App\City::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => 'cityimage',
        'created_at' => now(),
        'updated_at' => now()
    ];
});
