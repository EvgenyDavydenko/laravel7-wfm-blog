<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $content = $faker->realText(rand(200, 400));
    $time = $faker->dateTimeBetween('-30 days', '-1 days');

    return [
        'title' => mb_substr($content, 0, 50),
        'content' => $content,
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
