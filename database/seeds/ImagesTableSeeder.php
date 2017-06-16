<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Image::create([
            'title' => 'Unknown user',
            'path' => 'assets/img/examples/unknown_user.jpg',
        ]);

        \App\Image::create([
            'title' => 'test1 image01',
            'path' => 'assets/img/test1.jpg',
        ]);

        \App\Image::create([
            'title' => 'test1 image02',
            'path' => 'assets/img/examples/blog6.jpg',
        ]);

        \App\Image::create([
            'title' => 'test1 image03',
            'path' => 'assets/img/examples/blog8.jpg',
        ]);

        \App\Image::create([
            'title' => 'Luís Avatar',
            'path' => 'assets/img/examples/Teeth.jpg',
        ]);
    }
}
