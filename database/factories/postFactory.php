<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;


$factory->define(post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(400),
        'date_written' => now(),
        'featured_image' => $faker->imageUrl(),
        'vote_up' => $faker->numberBetween(1, 100),
        'vote_down' => $faker->numberBetween(1, 100),
        'user_id' => $faker->numberBetween(1, 50),
        'category_id' => $faker->numberBetween(1, 15),
    ];
});
