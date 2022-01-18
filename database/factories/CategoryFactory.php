<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
      'name' => rtrim($faker->word(rand(5, 10)), "."),
      'slug' => Str::slug(rtrim($faker->word(rand(5, 10)))),
    ];
});
