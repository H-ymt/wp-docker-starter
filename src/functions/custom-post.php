<?php
//============================================================
// カスタム投稿
//============================================================
function add_custom_post_type()
{
  register_post_type("example", [
    "label" => "カスタム投稿",
    "public" => true,
    "has_archive" => true,
    "menu_position" => 5,
    "menu_icon" => "dashicons-edit",
    "show_in_rest" => true,
    "supports" => ["title", "editor", "thumbnail"],
  ]);

  register_taxonomy("example-category", "example", [
    "label" => "カテゴリー",
    "hierarchical" => true,
    "public" => true,
    "show_in_rest" => true,
    "rewrite" => [
      "slug" => "example/example-category",
      "with_front" => false,
    ],
  ]);

  register_taxonomy("example-tag", "example", [
    "label" => "タグ",
    "hierarchical" => true,
    "public" => true,
    "show_in_rest" => true,
    "rewrite" => [
      "slug" => "example/example-tag",
      "with_front" => false,
    ],
  ]);
}
add_action("init", "add_custom_post_type");
