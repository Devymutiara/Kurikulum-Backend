<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'post_id' => $faker->randomElement([1,2,3,5,6,7,9,10,12,13,14,15,6,16,17,18,19,20]),
        'name' => $faker->name,
        'age' => $faker->numberBetween(10, 40)
    ];
});
