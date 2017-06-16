<?php

use Illuminate\Database\Seeder;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PostTag::create([
            'post_id' => 1,
            'tag_id' => 1,
        ]);

        \App\PostTag::create([
            'post_id' => 1,
            'tag_id' => 2,
        ]);

        \App\PostTag::create([
            'post_id' => 1,
            'tag_id' => 3,
        ]);

        \App\PostTag::create([
            'post_id' => 1,
            'tag_id' => 4,
        ]);

        \App\PostTag::create([
            'post_id' => 2,
            'tag_id' => 5,
        ]);

        \App\PostTag::create([
            'post_id' => 2,
            'tag_id' => 6,
        ]);

        \App\PostTag::create([
            'post_id' => 2,
            'tag_id' => 7,
        ]);

        \App\PostTag::create([
            'post_id' => 2,
            'tag_id' => 8,
        ]);

        \App\PostTag::create([
            'post_id' => 2,
            'tag_id' => 9,
        ]);

        \App\PostTag::create([
            'post_id' => 3,
            'tag_id' => 10,
        ]);

        \App\PostTag::create([
            'post_id' => 3,
            'tag_id' => 11,
        ]);

        \App\PostTag::create([
            'post_id' => 3,
            'tag_id' => 12,
        ]);

        \App\PostTag::create([
            'post_id' => 3,
            'tag_id' => 13,
        ]);

        \App\PostTag::create([
            'post_id' => 4,
            'tag_id' => 14,
        ]);

        \App\PostTag::create([
            'post_id' => 4,
            'tag_id' => 15,
        ]);

        \App\PostTag::create([
            'post_id' => 4,
            'tag_id' => 16,
        ]);
    }
}
