<?php
function get_ajax_posts()
{
  // Query Arguments
  $args = array(
    'post_type' => array('ads'),
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
      'descr' => get_the_excerpt($post->ID),
      'date' =>  get_the_date('d.m.y', $post->ID),
      'materials' =>   get_field('materials', $post->ID),
      'city' => get_field('city', $post->ID),
      'region' => get_field('region', $post->ID),
      'tel' => get_field('tel', $post->ID),
      'name' => get_field('name', $post->ID),
      'types' => get_field('types', $post->ID),
      'status' => get_field('status', $post->ID),
      'profession' => get_field('profession', $post->ID),
      'photo' => array(get_field('photo-0', $post->ID), get_field('photo-1', $post->ID), get_field('photo-2', $post->ID),
      get_field('photo-3', $post->ID), get_field('photo-4', $post->ID)),
      'url' => get_permalink($post->ID)
    );



    array_push($ajaxposts, $item);
  }

  // The Query
  // $ajaxposts = get_posts($args); // changed to get_posts from wp_query, because `get_posts` returns an array

  return json_encode($ajaxposts);
}
