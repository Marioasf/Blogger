<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tag::create([
            'title' => 'Computers',
        ]);

        \App\Tag::create([
            'title' => 'Cameras',
        ]);

        \App\Tag::create([
            'title' => 'Photography',
        ]);

        \App\Tag::create([
            'title' => 'Portugal',
        ]);

        \App\Tag::create([
            'title' => 'Cooking',
        ]);

        \App\Tag::create([
            'title' => 'War',
        ]);

        \App\Tag::create([
            'title' => 'Gun',
        ]);

        \App\Tag::create([
            'title' => 'Laptops',
        ]);

        \App\Tag::create([
            'title' => 'Software',
        ]);

        \App\Tag::create([
            'title' => 'Hardware',
        ]);

        \App\Tag::create([
            'title' => 'Motorcycles',
        ]);

        \App\Tag::create([
            'title' => 'Business',
        ]);

        \App\Tag::create([
            'title' => 'Edibles',
        ]);

        \App\Tag::create([
            'title' => 'E-Cigs',
        ]);

        \App\Tag::create([
            'title' => 'Vaping',
        ]);

        \App\Tag::create([
            'title' => 'Nicotine',
        ]);

    }
}
