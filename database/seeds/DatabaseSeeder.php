<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 3)->create();

        factory(App\Tag::class, 3)->create();

        factory(App\Blog_User::class, 3)->create();

        factory(App\User::class, 3)->create()->each(function($u) {
          $u->post()
            ->saveMany(
              factory(App\Post::class, rand(1, 5))->create()->each(function($post) {
                  $post->tag()->attach(factory(App\Tag::class)->create()->id);
              })
            )
            ->each(function ($r) {
              $r->comments()->saveMany(factory(App\Comment::class, rand(1, 5))->make());
            });
        });

  }
}
