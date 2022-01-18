<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      // 'category_id' => function () {
      //   return factory(App\Category::class)->create()->id;
      // },
      'category_id' =>App\Category::pluck('id')->random(),
      'judul' => rtrim($faker->sentence(rand(5, 10)), "."),
      'slug' => Str::slug(rtrim($faker->sentence(rand(5, 10)))),
      'content' => $faker->paragraph,
      // 'image' => $faker->image(public_path('upload/post/'),400,300, null, false),
      'image'=> 'upload/post/post.jpg',
      'user_id' =>App\User::pluck('id')->random(),
      // 'comments_count' => rand(1, 10),
    ];
});
