<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "MH Haekal",
            "body" => "
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, illo dolores. Perferendis, in aut harum distinctio iste quis consequatur explicabo asperiores non. Temporibus dolorum sint magni fugiat quibusdam eligendi rem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "M Hafizh H",
            "body" => "
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, illo dolores. Perferendis, in aut harum distinctio iste quis consequatur explicabo asperiores non. Temporibus dolorum sint magni fugiat quibusdam eligendi rem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, illo dolores. Perferendis, in aut harum distinctio iste quis consequatur explicabo asperiores non. Temporibus dolorum sint magni fugiat quibusdam eligendi rem."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
