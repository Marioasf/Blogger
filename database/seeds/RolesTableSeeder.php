<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create([
            'role' => 'admin',
            'title' => 'Administrator',
            'permission' => 0,
            'description' => 'System Administrator',
        ]);

        \App\Role::create([
            'role' => 'author',
            'title' => 'Author',
            'permission' => 1,
            'description' => 'Post Author',
        ]);

        \App\Role::create([
            'role' => 'comentator',
            'title' => 'Comentator',
            'permission' => 2,
            'description' => 'Viewer and participant',
        ]);
    }
}
