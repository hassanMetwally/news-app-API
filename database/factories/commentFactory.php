<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\comment;
use Faker\Generator as Faker;

$factory->define(comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'date_written' => now(),
        'user_id' => $faker->numberBetween(1, 50),
        'post_id' => $faker->numberBetween(1, 500)
    ];
});
