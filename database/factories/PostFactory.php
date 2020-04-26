<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, User::count()),
        'title' => $faker->text,
        'slug' => $faker->slug,
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
