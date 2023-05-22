<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Brad Wisesa",
        "body" =>  "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita voluptatibus dolorum natus pariatur. Amet quo sit soluta quisquam accusamus facere possimus corrupti dicta earum quidem? Hic, eligendi nesciunt? Facere atque a quam tempora aliquam dolores magni consectetur dolorum unde commodi magnam laudantium quaerat, eaque, provident vitae cum dolorem natus impedit veritatis deserunt enim recusandae. Cumque laboriosam laudantium asperiores voluptas odio repudiandae praesentium itaque, error mollitia enim! Soluta in quibusdam sunt laudantium commodi iste, exercitationem blanditiis odit eligendi ducimus quos optio."],
        [
            "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Brad Wisesa",
        "body" =>  "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita voluptatibus dolorum natus pariatur. Amet quo sit soluta quisquam accusamus facere possimus corrupti dicta earum quidem? Hic, eligendi nesciunt? Facere atque a quam tempora aliquam dolores magni consectetur dolorum unde commodi magnam laudantium quaerat, eaque, provident vitae cum dolorem natus impedit veritatis deserunt enim recusandae. Cumque laboriosam laudantium asperiores voluptas odio repudiandae praesentium itaque, error mollitia enim! Soluta in quibusdam sunt laudantium commodi iste, exercitationem blanditiis odit eligendi ducimus quos optio."]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts=static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
