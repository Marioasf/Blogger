<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Reply::create([
            'comment_id' => 1,
            'user_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eros dui, malesuada ut velit in, accumsan condimentum nisi. Quisque risus est, eleifend non odio et, dapibus sodales leo. Ut rhoncus metus ut massa convallis aliquam. Vivamus ultrices, dolor eu cursus elementum, orci velit vulputate lorem, a pretium ex quam id enim. Suspendisse mauris massa, pharetra sit amet nibh in, egestas ornare libero. Nam efficitur lorem vitae tellus congue ultrices. Nulla scelerisque rhoncus leo. Nunc blandit mi eu mi rhoncus laoreet.',
        ]);

        \App\Reply::create([
            'comment_id' => 1,
            'user_id' => 2,
            'content' => 'Suspendisse semper vestibulum enim, quis aliquet tellus egestas pharetra. Donec sagittis id enim in varius. Sed vel orci quis leo bibendum aliquet quis ac nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at tortor at urna ullamcorper ultrices. Sed metus arcu, ultricies sit amet pharetra nec, pulvinar vitae nibh. Duis ultricies venenatis lectus quis tempor. Curabitur tempus elementum nibh id congue. Nullam nec nunc velit. In et nibh consectetur, mollis turpis eget, vehicula lacus. Nunc sed sem mi. Fusce vel eleifend dolor.',
        ]);

        \App\Reply::create([
            'comment_id' => 1,
            'user_id' => 3,
            'content' => 'Cras imperdiet hendrerit dolor dignissim facilisis. Nulla facilisi. Proin tempor orci sed dui tincidunt blandit. Praesent laoreet, ex non fermentum vehicula, ex quam dictum tellus, sit amet posuere dui orci in velit. Duis ac ornare risus, nec gravida magna. Donec sit amet dolor sed dui efficitur sagittis at quis nunc. Fusce eget dui vitae nisl pretium auctor sit amet et tellus. Nulla dictum mollis scelerisque. Ut egestas luctus vehicula. Praesent congue turpis vitae dui luctus eleifend.',
        ]);

        \App\Reply::create([
            'comment_id' => 2,
            'user_id' => 1,
            'content' => 'Maecenas in vestibulum metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel diam ac eros feugiat interdum. Nullam laoreet semper nibh, sit amet dictum sapien volutpat et. Morbi libero elit, fringilla eget erat sed, posuere dapibus nibh. Proin vestibulum auctor dolor tristique sodales. Phasellus lacinia lacinia magna eu fermentum. Sed ipsum diam, suscipit a ullamcorper a, auctor at eros. Fusce posuere suscipit odio, vel condimentum felis facilisis non.',
        ]);

    }
}
