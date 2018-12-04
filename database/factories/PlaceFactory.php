<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'description' => $faker->sentence,
        'image' => '$2y$10$.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'id_city' => rand(1,5),
        'created_at' => now(),
        'updated_at' => now()
    ];
});

$factory->define(App\City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'description' => $faker->sentence,
        'image' => 'cityimage',
        'created_at' => now(),
        'updated_at' => now()
    ];
});


$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence,
        'rating' => rand(1,5),
        'id_user' => rand(1,5),
        'id_place' => rand(1,5),
        'created_at' => now(),
        'updated_at' => now()
    ];
});


$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'password' => $faker->domainWord,
        'email' => $faker->email,
        'image' => 'cityimage',
        'status' => 'active',
        'created_at' => now(),
        'updated_at' => now()
    ];
});