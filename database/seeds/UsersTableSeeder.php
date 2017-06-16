<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Luís Francisco',
            'image_id' => 4,
            'bio' => 'Buga Buga Buga',
            'email' => 'lcsimoesfrancisco@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 1,
        ]);

        \App\User::create([
            'name' => 'Luís',
            'image_id' => 4,
            'bio' => 'Bingo Bio!',
            'email' => 'calpis.nomu@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 2,
        ]);

        \App\User::create([
            'name' => 'Mário',
            'image_id' => 4,
            'bio' => 'Mario Bio! bla bla bla',
            'email' => 'marioasfrancisco@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => 2,
        ]);
    }
}
