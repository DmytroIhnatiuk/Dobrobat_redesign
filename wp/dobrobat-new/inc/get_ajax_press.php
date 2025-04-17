<?php
function get_ajax_press()
{
  // Query Arguments
  $args = array(
    'post_type' => array('press'),
    'post_status' => array('publish'),
    // 'posts_per_page' => 40,
    'nopaging' => true,
    'order' => 'DESC',
    'orderby' => 'date',
    // 'cat' => 1,
  );

  $posts = get_posts($args);
  $ajaxposts = [];

  foreach ($posts as $post) {

    $item = array(
      'postId' => $post->ID,
      'title' => get_the_title($post->ID),
      'date' =>  get_the_date('d.m.y', $post->ID),
      'mainImg' => get_field('main-img', $post->ID),
      'link' => get_field('link', $post->ID),
      'isEn'=> get_field('language', $post->ID)
    );



    array_push($ajaxposts, $item);
  }

  // The Query
  // $ajaxposts = get_posts($args); // changed to get_posts from wp_query, because `get_posts` returns an array

  return json_encode($ajaxposts);
}
