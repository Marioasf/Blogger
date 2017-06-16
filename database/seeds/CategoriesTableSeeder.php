<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'title' => 'Technology',
            'description' => 'Technology ("science of craft", from Greek τέχνη, techne, "art, skill, cunning of hand"; and -λογία, -logia[2]) is the collection of techniques, skills, methods and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. Technology can be the knowledge of techniques, processes, and the like, or it can be embedded in machines which can be operated without detailed knowledge of their workings.',
        ]);

        \App\Category::create([
            'title' => 'Politics',
            'description' => 'Politics (from Greek: Politiká: Politika, definition "affairs of the cities") is the process of making decisions applying to all members of each group. More narrowly, it refers to achieving and exercising positions of governance — organized control over a human community, particularly a state. Furthermore, politics is the study or practice of the distribution of power and resources within a given community (this is usually a hierarchically organized population) as well as the interrelationship(s) between communities.',
        ]);
    }
}
