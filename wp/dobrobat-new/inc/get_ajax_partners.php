<?php
function get_ajax_partners()
{
  // Query Arguments
  $args = array(
    'post_type' => array('partners'),
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
      'partners' => get_field('partners', $post->ID),

    );



    array_push($ajaxposts, $item);
  }

  // The Query
  // $ajaxposts = get_posts($args); // changed to get_posts from wp_query, because `get_posts` returns an array

  return json_encode($ajaxposts);
}
