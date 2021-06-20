<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Topic;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    $slug = Str::slug($title);
    return [
        //
        'title' =>$title,
        'slug' => $slug,
        'lead' => $faker->paragraphs(3, true),
        'content' => $faker->text(300),
        'user_id' => User::all()->pluck('id')->random(),
        'topic_id' => Topic::all()->pluck('id')->random()
    ];

});
