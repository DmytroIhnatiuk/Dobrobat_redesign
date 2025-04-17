<?php
function get_ajax_objects()
{
  // Query Arguments
  $args = array(
    'post_type' => array('objects'),
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
    
      'city' => get_field('city', $post->ID),
      'region' => get_field('region', $post->ID),
      'types' => get_field('types', $post->ID),
      'descr' => get_the_excerpt($post->ID),
      'infrostructure' => get_field('infrostructure', $post->ID),

      'title_en' =>  get_field('title_en', $post->ID),
      'descr_en' =>  get_field('descr_en', $post->ID),
      'city_en' => get_field('city_en', $post->ID),
      'region_en' => get_field('region_en', $post->ID),
      'types_en' => get_field('types_en', $post->ID),
      'infrostructure_en' => get_field('infrostructure_en', $post->ID),

      'date' =>  get_the_date('d.m.y', $post->ID),
      'doc' => get_field('doc', $post->ID),
      'start' => get_field('start', $post->ID),
      'goal' => get_field('goal', $post->ID),

      'photo' => get_field('photo', $post->ID),
      'status'=> get_field('status', $post->ID),
        'link' =>  get_permalink($post->ID)
    );



    array_push($ajaxposts, $item);
  }

  // The Query
  // $ajaxposts = get_posts($args); // changed to get_posts from wp_query, because `get_posts` returns an array

  return json_encode($ajaxposts);
}
