<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Identity;
use Faker\Generator as Faker;

$factory->define(Identity::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(3, 29),
        'address' => $faker->address,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber
    ];
});
