<?php
function get_ajax_news()
{
  // Query Arguments
  $args = array(
    'post_type' => array('news'),
    'post_status' => array('publish'),
    // 'posts_per_page' => 40,
    'nopaging' => true,
    'order' => 'DESC',
    'orderby' => 'date',
    // 'cat' => 1,
  );
  if (get_locale() == 'en'){
      $args['lang'] = 'en';
  }

  $posts = get_posts($args);
  $ajaxposts = [];

  foreach ($posts as $post) {

$imageSrc =  wp_get_attachment_image(get_field('main-img', $post->ID), 'dobrobat_news_thumb', false, array('width' => 'dobrobat_news_thumb', 'height' => 'dobrobat_news_thumb', 'class' => 'bdr-12'));

    $item = array(
      'postId' => $post->ID,
      'title' => get_the_title($post->ID),
      'descr' => get_the_excerpt($post->ID),
      'date' =>  get_the_date('d.m.y', $post->ID),
      'firstP' => get_field('first-p', $post->ID),
      'newsGallery' => get_field('news-gallery', $post->ID),
      'mainImg' => $imageSrc,
      'url' => get_permalink($post->ID),
    );



    array_push($ajaxposts, $item);
  }

  // The Query
  // $ajaxposts = get_posts($args); // changed to get_posts from wp_query, because `get_posts` returns an array

  return json_encode($ajaxposts);
}
