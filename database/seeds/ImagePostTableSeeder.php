<?php

use Illuminate\Database\Seeder;

class ImagePostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ImagePost::create([
            'post_id' => 1,
            'image_id' => 1,
        ]);

        \App\ImagePost::create([
            'post_id' => 1,
            'image_id' => 2,
        ]);

        \App\ImagePost::create([
            'post_id' => 1,
            'image_id' => 3,
        ]);
    }
}
