<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ImagePostTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
    }
}
