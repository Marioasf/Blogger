<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Comment::create([
            'post_id' => 1,
            'user_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eros dui, malesuada ut velit in, accumsan condimentum nisi. Quisque risus est, eleifend non odio et, dapibus sodales leo. Ut rhoncus metus ut massa convallis aliquam. Vivamus ultrices, dolor eu cursus elementum, orci velit vulputate lorem, a pretium ex quam id enim. Suspendisse mauris massa, pharetra sit amet nibh in, egestas ornare libero. Nam efficitur lorem vitae tellus congue ultrices. Nulla scelerisque rhoncus leo. Nunc blandit mi eu mi rhoncus laoreet.',
        ]);

        \App\Comment::create([
            'post_id' => 1,
            'user_id' => 2,
            'content' => 'Suspendisse semper vestibulum enim, quis aliquet tellus egestas pharetra. Donec sagittis id enim in varius. Sed vel orci quis leo bibendum aliquet quis ac nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at tortor at urna ullamcorper ultrices. Sed metus arcu, ultricies sit amet pharetra nec, pulvinar vitae nibh. Duis ultricies venenatis lectus quis tempor. Curabitur tempus elementum nibh id congue. Nullam nec nunc velit. In et nibh consectetur, mollis turpis eget, vehicula lacus. Nunc sed sem mi. Fusce vel eleifend dolor.',
        ]);

        \App\Comment::create([
            'post_id' => 1,
            'user_id' => 3,
            'content' => 'Cras imperdiet hendrerit dolor dignissim facilisis. Nulla facilisi. Proin tempor orci sed dui tincidunt blandit. Praesent laoreet, ex non fermentum vehicula, ex quam dictum tellus, sit amet posuere dui orci in velit. Duis ac ornare risus, nec gravida magna. Donec sit amet dolor sed dui efficitur sagittis at quis nunc. Fusce eget dui vitae nisl pretium auctor sit amet et tellus. Nulla dictum mollis scelerisque. Ut egestas luctus vehicula. Praesent congue turpis vitae dui luctus eleifend.',
        ]);

        \App\Comment::create([
            'post_id' => 2,
            'user_id' => 1,
            'content' => 'Maecenas in vestibulum metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel diam ac eros feugiat interdum. Nullam laoreet semper nibh, sit amet dictum sapien volutpat et. Morbi libero elit, fringilla eget erat sed, posuere dapibus nibh. Proin vestibulum auctor dolor tristique sodales. Phasellus lacinia lacinia magna eu fermentum. Sed ipsum diam, suscipit a ullamcorper a, auctor at eros. Fusce posuere suscipit odio, vel condimentum felis facilisis non.',
        ]);

        \App\Comment::create([
            'post_id' => 2,
            'user_id' => 2,
            'content' => 'Phasellus eget ultrices massa. Phasellus mollis facilisis eros. Sed suscipit eu felis a consectetur. Duis dignissim orci eu nibh vehicula efficitur. Ut consectetur mollis urna. Aenean eget hendrerit neque. Integer accumsan urna sit amet diam feugiat, quis pulvinar dui auctor. Maecenas vulputate mattis massa sit amet tempor. Ut tincidunt sollicitudin justo, et fermentum magna varius luctus.',
        ]);

        \App\Comment::create([
            'post_id' => 3,
            'user_id' => 2,
            'content' => 'Donec gravida mi eu urna scelerisque varius. Vivamus id nisi nisi. Praesent molestie elit non malesuada luctus. Nullam sit amet sem in tellus efficitur ullamcorper ac at nulla. Pellentesque a libero ac erat auctor luctus id vitae mi. In urna orci, vehicula et tellus eget, eleifend auctor enim. Fusce porttitor nulla ac tellus auctor aliquet.',
        ]);

        \App\Comment::create([
            'post_id' => 3,
            'user_id' => 3,
            'content' => 'Quisque eu nisi iaculis, aliquet libero ut, dignissim lorem. Cras dignissim ornare dui non feugiat. Nam tincidunt ex ipsum, ac maximus neque molestie vel. Mauris placerat tellus mauris, placerat malesuada ipsum eleifend ac. Quisque ac leo nunc. Morbi placerat ipsum vitae vehicula tristique. Etiam sit amet turpis neque. Etiam porta mauris eu augue tristique, eu hendrerit risus pellentesque. Sed eget mi tristique, lacinia erat nec, vulputate nibh. Curabitur quis volutpat sem. Proin hendrerit dapibus erat, vel eleifend magna condimentum a. Vivamus tortor nulla, mattis in velit non, maximus efficitur ipsum. Sed sed sagittis neque, sit amet sagittis tortor.',
        ]);

        \App\Comment::create([
            'post_id' => 4,
            'user_id' => 1,
            'content' => 'Nulla bibendum turpis leo, elementum volutpat magna sodales ac. Maecenas augue arcu, facilisis non sem nec, tempus pellentesque tortor. Donec ipsum risus, lacinia ultricies massa quis, egestas tincidunt diam. Donec eleifend diam id pharetra consectetur. Aenean sed tincidunt urna. Maecenas semper turpis dolor, nec molestie mauris efficitur posuere. Maecenas eleifend, ante eget malesuada tristique, tortor dolor ullamcorper sem, eget faucibus arcu magna a elit. Etiam iaculis luctus libero. Sed nisi velit, tempus eget lacinia eget, molestie sit amet dolor. Integer luctus semper convallis. Nulla viverra blandit arcu, id tempus orci feugiat a. Nunc malesuada nulla neque, quis aliquam enim maximus at.',
        ]);

        \App\Comment::create([
            'post_id' => 4,
            'user_id' => 2,
            'content' => 'Integer efficitur diam vel tortor euismod, a rhoncus eros eleifend. Integer luctus at arcu tincidunt tempus. Sed turpis tellus, pharetra vel porttitor vitae, gravida et augue. Ut mauris arcu, accumsan ut sollicitudin sit amet, auctor dignissim tellus. Pellentesque et magna dapibus, aliquam odio quis, consectetur odio. Nulla maximus non neque et egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. In ac faucibus massa. Fusce rhoncus elit orci, et aliquet augue porta id. Vestibulum hendrerit dolor lorem, a ullamcorper turpis commodo eu. Sed auctor lacinia tincidunt. Quisque in mi in augue molestie egestas.',
        ]);
    }
}
