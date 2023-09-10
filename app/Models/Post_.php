<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizki Maulana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, est facilis quibusdam explicabo consequatur minus vitae saepe rem veniam odio sequi! Ad, impedit. Reprehenderit rem mollitia hic esse quam laborum nostrum corporis labore veniam quae ea quasi porro eos qui repudiandae quis dolorem nisi neque earum veritatis provident, perspiciatis sequi ex accusantium? Esse odit veritatis sequi amet eveniet. Expedita enim doloribus aliquam itaque dolores libero quaerat minus. Numquam facilis eos quia, ipsum atque ut dolores natus nobis similique iure autem."

        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rifa Maulana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, est facilis quibusdam explicabo consequatur minus vitae saepe rem veniam odio sequi! Ad, impedit. Reprehenderit rem mollitia hic esse quam laborum nostrum corporis labore veniam quae ea quasi porro eos qui repudiandae quis dolorem nisi neque earum veritatis provident, perspiciatis sequi ex accusantium? Esse odit veritatis sequi amet eveniet."

        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
