<?php

// CSS・JSを読み込む
function theme_scripts() {

    // Reset CSS
    wp_enqueue_style('reset-style', 'https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css');

    // Swiper CSS
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');

    // 自作CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0');

    // Swiper JS
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), null, true);

    // 自作JS
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// お知らせ設定
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['labels'] = array(
      'name' => 'お知らせ'
    );
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// お知らせ設定　パーマリンク変更
add_filter('post_type_archive_link', function ($link, $post_type) {
  if ('post' === $post_type) {
    $post_type_object = get_post_type_object('post');
    $slug = $post_type_object->has_archive;
    $link = get_home_url(null, '/' . $slug . '/');
  }
  return $link;
}, 10, 2);


function add_article_post_permalink($permalink)
{
  $permalink = '/news' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');

// お知らせ設定　リライトルール変更
function add_article_post_rewrite_rules($post_rewrite)
{
  $return_rule = array();
  foreach ($post_rewrite as $regex => $rewrite) {
    $return_rule['news/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');