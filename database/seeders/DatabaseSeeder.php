<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Rizki Maulana',
        //     'username' => 'rizkimaulana',
        //     'email' => 'rizki@gmail.com',
        //     'password' => bcrypt('password'),
        //     'is_admin' => 1
        // ]);

        // User::factory(3)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming',
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        Post::factory(100)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus. Animi natus delectus unde. Impedit molestias at non aspernatur unde nobis voluptatem error facilis provident quo ipsum earum vero fugit magni cumque, eius commodi tempore ea rem quia! Aliquam voluptates facere optio, nihil iusto officia dignissimos consequatur distinctio illo maxime dolor in odit molestiae blanditiis magni animi assumenda unde recusandae ipsum possimus ut. Voluptatem, molestiae, commodi aspernatur autem accusantium debitis vitae ratione reprehenderit quas dolore totam labore et quos provident perferendis temporibus atque, iste id!'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus. Animi natus delectus unde. Impedit molestias at non aspernatur unde nobis voluptatem error facilis provident quo ipsum earum vero fugit magni cumque, eius commodi tempore ea rem quia! Aliquam voluptates facere optio, nihil iusto officia dignissimos consequatur distinctio illo maxime dolor in odit molestiae blanditiis magni animi assumenda unde recusandae ipsum possimus ut. Voluptatem, molestiae, commodi aspernatur autem accusantium debitis vitae ratione reprehenderit quas dolore totam labore et quos provident perferendis temporibus atque, iste id!'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus. Animi natus delectus unde. Impedit molestias at non aspernatur unde nobis voluptatem error facilis provident quo ipsum earum vero fugit magni cumque, eius commodi tempore ea rem quia! Aliquam voluptates facere optio, nihil iusto officia dignissimos consequatur distinctio illo maxime dolor in odit molestiae blanditiis magni animi assumenda unde recusandae ipsum possimus ut. Voluptatem, molestiae, commodi aspernatur autem accusantium debitis vitae ratione reprehenderit quas dolore totam labore et quos provident perferendis temporibus atque, iste id!'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam eveniet harum maiores consequuntur dicta? Dignissimos hic ab culpa, quas minima est aliquid modi necessitatibus. Animi natus delectus unde. Impedit molestias at non aspernatur unde nobis voluptatem error facilis provident quo ipsum earum vero fugit magni cumque, eius commodi tempore ea rem quia! Aliquam voluptates facere optio, nihil iusto officia dignissimos consequatur distinctio illo maxime dolor in odit molestiae blanditiis magni animi assumenda unde recusandae ipsum possimus ut. Voluptatem, molestiae, commodi aspernatur autem accusantium debitis vitae ratione reprehenderit quas dolore totam labore et quos provident perferendis temporibus atque, iste id!'
        // ]);
    }
}
