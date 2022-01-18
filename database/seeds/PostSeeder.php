<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'category_id' => '1',
        'judul' => 'ini adalah post kedua',
        'content' => 'ini adalah konten keduaa yoo',
        'image' => 'gambardua.jpg'
      ]);
    }
}
