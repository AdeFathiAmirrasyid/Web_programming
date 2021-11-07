<?php

namespace App\Models;


class Posts
{
    private static  $blog_posts = [
      [
        "title" => "Judul Tulisan Pertama",
        "slug"  => "judul-tulisan-pertama",
        "body"  => "  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, ex totam repudiandae vel quidem dolore, minus qui odio voluptatum minima quo delectus magnam nulla. Quasi, labore alias inventore mollitia aliquam odio. Accusantium magni iusto amet, libero id, corrupti iure recusandae error quam aliquid sint debitis sed quaerat maiores reiciendis dolor odio numquam nihil exercitationem deserunt ex beatae voluptas officiis illum. Consectetur aliquid doloribus in laboriosam suscipit expedita quis exercitationem facere? Iusto ab accusamus sint eveniet nesciunt blanditiis accusantium odit id."
      ],
      [
        "title" => "Judul Tulisan Kedua",
        "slug"  => "judul-tulisan-kedua",
        "body"  => "  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, ex totam repudiandae vel quidem dolore, minus qui odio voluptatum minima quo delectus magnam nulla. Quasi, labore alias inventore mollitia aliquam odio. Accusantium magni iusto amet, libero id, corrupti iure recusandae error quam aliquid sint debitis sed quaerat maiores reiciendis dolor odio numquam nihil exercitationem deserunt ex beatae voluptas officiis illum. Consectetur aliquid doloribus in laboriosam suscipit expedita quis exercitationem facere? Iusto ab accusamus sint eveniet nesciunt blanditiis accusantium odit id."
      ]

    ];

    public static function all(){
        return self::$blog_posts;
    }
}
