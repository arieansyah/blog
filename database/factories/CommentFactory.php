<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, Post::count()),
        'name' => $faker->name,
        'email' => User::find(rand(1, User::count()))->email,
        'website' => $faker->url,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
