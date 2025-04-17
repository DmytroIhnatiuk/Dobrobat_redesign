<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dobrobat
 */

?>
<!-- <div class="col-12 col-md-6 col-lg-3"> -->

<div id="news-<?php the_ID(); ?>" class="col-12 col-md-6 col-lg-4 news-item__wrapper">
	<div class="news-item">

		<div class="date">
		
			Додано: 
		
			<span><?php the_time('j F') ?> </span>
		</div>
	


		<div class="image">
		<img src="<?php the_field('main-img') ?>" alt="<?php the_title() ?>">

		</div>
		<h3 class="news-item__title fz-24">
		<?php the_title() ?>
		</h3>


		<a href="<?php the_permalink() ?>" class="btn" >Переглянути</a>









	</div>





</div><!-- #post-<?php the_ID(); ?> -->

<!--  wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dobrobat' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		-->