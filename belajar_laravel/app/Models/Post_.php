<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus expedita blanditiis aspernatur, repellendus quidem hic,
                        quo beatae, numquam iusto officiis odio quos omnis corrupti incidunt autem facilis eius.
                        Adipisci, ea.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus expedita blanditiis aspernatur, repellendus quidem hic,
                        quo beatae, numquam iusto officiis odio quos omnis corrupti incidunt autem facilis eius.
                        Adipisci, ea.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus expedita blanditiis aspernatur, repellendus quidem hic,
                        quo beatae, numquam iusto officiis odio quos omnis corrupti incidunt autem facilis eius."
        ],

        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus expedita blanditiis aspernatur, repellendus quidem hic,
                        quo beatae, numquam iusto officiis odio quos omnis corrupti incidunt autem facilis eius.
                        Adipisci, ea.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus expedita blanditiis aspernatur, repellendus quidem hic,
                        quo beatae, numquam iusto officiis odio quos omnis corrupti incidunt autem facilis eius.
                        Adipisci, ea.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus expedita blanditiis aspernatur, repellendus quidem hic,
                        quo beatae, numquam iusto officiis odio quos omnis corrupti incidunt autem facilis eius."
        ]
    ];


    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
