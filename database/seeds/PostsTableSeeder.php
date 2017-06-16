<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            'user_id' => 1,
            'title' => 'Teste 1',
            'category_id' => 1,
            'slug' => 'teste_1',
            'header' => 'assets/img/test1_header.jpg',
            'thumbnail' => 'assets/img/test1_thumbnail.jpg',
            'short' => 'Aenean nunc arcu, pellentesque a mattis ut, aliquam sit amet erat. Aliquam bibendum orci felis, sed consequat tellus sagittis vel.',
            'content' => 'Aenean nunc arcu, pellentesque a mattis ut, aliquam sit amet erat. Aliquam bibendum orci felis, sed consequat tellus sagittis vel. Vivamus tincidunt suscipit turpis, ut vehicula metus. Vestibulum blandit laoreet dolor, at convallis dolor cursus sodales. Suspendisse molestie tempor massa, at efficitur justo ultricies ornare. Aenean et sollicitudin dui, eu molestie mi. Donec porttitor dui sit amet tortor posuere euismod. Praesent hendrerit dolor nec fringilla eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus.

				Fusce risus lorem, porttitor vel elit quis, convallis scelerisque felis. Aliquam eu vulputate massa. Suspendisse id lacinia tellus. Mauris vitae consequat orci. Fusce id nulla enim. Nunc varius magna nec sem ultrices fringilla. Vestibulum et tortor sit amet augue lacinia porttitor non sit amet felis. Cras turpis metus, ultricies sed auctor et, cursus et velit. Nullam orci ex, pulvinar a hendrerit sit amet, fringilla vel libero. Nunc euismod odio quis metus laoreet vulputate.

				Morbi tempor, quam non commodo tempor, lacus purus malesuada diam, eu fringilla nunc sem ut nunc. Vestibulum facilisis massa quis justo aliquet aliquet. Nullam et elementum turpis. In fermentum quis mi et eleifend. Phasellus et ornare enim, eget hendrerit diam. Suspendisse molestie lorem a mauris rutrum, quis vulputate enim ornare. Duis euismod mi eu risus egestas mollis. In sagittis interdum tellus at cursus. In convallis dui ac erat varius scelerisque. Vestibulum dignissim sed est ac finibus. Etiam sit amet justo ut sapien laoreet varius et a est. Praesent congue metus eu velit fermentum, at cursus nisl efficitur. Pellentesque iaculis consectetur tellus convallis accumsan.',
        ]);

        \App\Post::create([
            'user_id' => 1,
            'title' => 'Teste 2',
            'category_id' => 1,
            'slug' => 'teste_2',
            'header' => 'assets/img/bg12.jpg',
            'thumbnail' => 'assets/img/product1.jpg',
            'short' => 'Fusce risus lorem, porttitor vel elit quis, convallis scelerisque felis. Aliquam eu vulputate massa.',
            'content' => 'Fusce risus lorem, porttitor vel elit quis, convallis scelerisque felis. Aliquam eu vulputate massa. Suspendisse id lacinia tellus. Mauris vitae consequat orci. Fusce id nulla enim. Nunc varius magna nec sem ultrices fringilla. Vestibulum et tortor sit amet augue lacinia porttitor non sit amet felis. Cras turpis metus, ultricies sed auctor et, cursus et velit. Nullam orci ex, pulvinar a hendrerit sit amet, fringilla vel libero. Nunc euismod odio quis metus laoreet vulputate.

                Morbi tempor, quam non commodo tempor, lacus purus malesuada diam, eu fringilla nunc sem ut nunc. Vestibulum facilisis massa quis justo aliquet aliquet. Nullam et elementum turpis. In fermentum quis mi et eleifend. Phasellus et ornare enim, eget hendrerit diam. Suspendisse molestie lorem a mauris rutrum, quis vulputate enim ornare. Duis euismod mi eu risus egestas mollis. In sagittis interdum tellus at cursus. In convallis dui ac erat varius scelerisque. Vestibulum dignissim sed est ac finibus. Etiam sit amet justo ut sapien laoreet varius et a est. Praesent congue metus eu velit fermentum, at cursus nisl efficitur. Pellentesque iaculis consectetur tellus convallis accumsan.',
        ]);

        \App\Post::create([
            'user_id' => 2,
            'title' => 'Teste 3',
            'category_id' => 2,
            'header' => 'assets/img/city.jpg',
            'thumbnail' => 'assets/img/product2.jpg',
            'slug' => 'teste_3',
            'short' => 'Morbi tempor, quam non commodo tempor, lacus purus malesuada diam, eu fringilla nunc sem ut nunc.',
            'content' => 'Morbi tempor, quam non commodo tempor, lacus purus malesuada diam, eu fringilla nunc sem ut nunc. Vestibulum facilisis massa quis justo aliquet aliquet. Nullam et elementum turpis. In fermentum quis mi et eleifend. Phasellus et ornare enim, eget hendrerit diam. Suspendisse molestie lorem a mauris rutrum, quis vulputate enim ornare. Duis euismod mi eu risus egestas mollis. In sagittis interdum tellus at cursus. In convallis dui ac erat varius scelerisque. Vestibulum dignissim sed est ac finibus. Etiam sit amet justo ut sapien laoreet varius et a est. Praesent congue metus eu velit fermentum, at cursus nisl efficitur. Pellentesque iaculis consectetur tellus convallis accumsan.

            Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam tempor sed elit non tempor. Integer ac efficitur purus, id feugiat sem. Mauris placerat odio est, non tincidunt leo porta et. Nam mollis sapien vel dictum dapibus. Integer facilisis nulla non tincidunt porttitor. Morbi fermentum molestie eros quis dictum. Phasellus tincidunt nec libero a ullamcorper.',
        ]);

        \App\Post::create([
            'user_id' => 2,
            'title' => 'Teste 4',
            'category_id' => 2,
            'header' => 'assets/img/dg1.jpg',
            'thumbnail' => 'assets/img/test1.jpg',
            'slug' => 'teste_4',
            'short' => 'Aenean nunc arcu, pellentesque a mattis ut, aliquam sit amet erat. Aliquam bibendum orci felis, sed consequat tellus sagittis vel.',
            'content' => 'Aenean nunc arcu, pellentesque a mattis ut, aliquam sit amet erat. Aliquam bibendum orci felis, sed consequat tellus sagittis vel. Vivamus tincidunt suscipit turpis, ut vehicula metus. Vestibulum blandit laoreet dolor, at convallis dolor cursus sodales. Suspendisse molestie tempor massa, at efficitur justo ultricies ornare. Aenean et sollicitudin dui, eu molestie mi. Donec porttitor dui sit amet tortor posuere euismod. Praesent hendrerit dolor nec fringilla eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus.

            Fusce risus lorem, porttitor vel elit quis, convallis scelerisque felis. Aliquam eu vulputate massa. Suspendisse id lacinia tellus. Mauris vitae consequat orci. Fusce id nulla enim. Nunc varius magna nec sem ultrices fringilla. Vestibulum et tortor sit amet augue lacinia porttitor non sit amet felis. Cras turpis metus, ultricies sed auctor et, cursus et velit. Nullam orci ex, pulvinar a hendrerit sit amet, fringilla vel libero. Nunc euismod odio quis metus laoreet vulputate.

            Morbi tempor, quam non commodo tempor, lacus purus malesuada diam, eu fringilla nunc sem ut nunc. Vestibulum facilisis massa quis justo aliquet aliquet. Nullam et elementum turpis. In fermentum quis mi et eleifend. Phasellus et ornare enim, eget hendrerit diam. Suspendisse molestie lorem a mauris rutrum, quis vulputate enim ornare. Duis euismod mi eu risus egestas mollis. In sagittis interdum tellus at cursus. In convallis dui ac erat varius scelerisque. Vestibulum dignissim sed est ac finibus. Etiam sit amet justo ut sapien laoreet varius et a est. Praesent congue metus eu velit fermentum, at cursus nisl efficitur. Pellentesque iaculis consectetur tellus convallis accumsan.',
        ]);
    }
}
