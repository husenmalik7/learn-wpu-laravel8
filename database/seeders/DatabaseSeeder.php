<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'whoami',
            'email' => 'who@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'youknowwho',
            'email' => 'youknowwho@gmail.com',
            'password' => bcrypt('123')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, conseceifend erat in',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar porta nibh eu ultrices. Nam eu nulla ligula. Sed commodo rhoncus sollicitudin. Sed id risus neque. Donec in vestibulum risus. Integer et vestibulum arcu. Nullam sed molestie sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam eget ipsum vel nisi bibendum ullamcorper. Morbi ligula elit, congue sagittis mattis ut, consequat nec diam. Integer rutrum imperdiet felis, vel hendrerit felis. Pellentesque porttitor dapibus ex, et condimentum urna porta non. Phasellus orci felis, laoreet nec vehicula non, mattis in velit. Pellentesque eleifend erat in lobortis euismod. Sed rhoncus, risus in tempor vestibulum, turpis neque tristique enim, sit amet interdum purus.'
        ]);

        Post::create([
            'title' => 'Judul kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, conseceifend erat in',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar porta nibh eu ultrices. Nam eu nulla ligula. Sed commodo rhoncus sollicitudin. Sed id risus neque. Donec in vestibulum risus. Integer et vestibulum arcu. Nullam sed molestie sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam eget ipsum vel nisi bibendum ullamcorper. Morbi ligula elit, congue sagittis mattis ut, consequat nec diam. Integer rutrum imperdiet felis, vel hendrerit felis. Pellentesque porttitor dapibus ex, et condimentum urna porta non. Phasellus orci felis, laoreet nec vehicula non, mattis in velit. Pellentesque eleifend erat in lobortis euismod. Sed rhoncus, risus in tempor vestibulum, turpis neque tristique enim, sit amet interdum purus.'
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, conseceifend erat in',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar porta nibh eu ultrices. Nam eu nulla ligula. Sed commodo rhoncus sollicitudin. Sed id risus neque. Donec in vestibulum risus. Integer et vestibulum arcu. Nullam sed molestie sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam eget ipsum vel nisi bibendum ullamcorper. Morbi ligula elit, congue sagittis mattis ut, consequat nec diam. Integer rutrum imperdiet felis, vel hendrerit felis. Pellentesque porttitor dapibus ex, et condimentum urna porta non. Phasellus orci felis, laoreet nec vehicula non, mattis in velit. Pellentesque eleifend erat in lobortis euismod. Sed rhoncus, risus in tempor vestibulum, turpis neque tristique enim, sit amet interdum purus.'
        ]);
    }
}
