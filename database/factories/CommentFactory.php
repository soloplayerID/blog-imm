<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' =>App\Post::pluck('id')->random(),
        'user_id' =>App\Blog_User::pluck('id')->random(),
        'body' => $faker->paragraph(rand(3, 7), true),
        // 'image' => $faker->image(public_path('upload/user/'),400,300, 'people', false),
        // 'image'=> 'upload/user/user.jpg',
    ];
});
