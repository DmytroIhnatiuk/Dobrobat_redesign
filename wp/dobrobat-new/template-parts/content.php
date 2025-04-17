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

<div id="post-<?php the_ID(); ?>" class="col-12 col-md-6 col-lg-3">
	<div class="ads-item">

		<div class="date">
			Додано: <span><?php the_time('j F') ?> </span>
		</div>
		<div class="adress">
			<div class="city f-bold fz-18">
				<?php the_field('city') ?>
			</div>
			<div class="region fz-16">
				<?php the_field('region') ?> обл.
			</div>
		</div>


		<div class="descr  fz-18">
			<?php the_content() ?>
		</div>


		<div class="name">
			<?php the_field('name') ?>
		</div>
		<button type="button" class="btn" data-modals='<?php the_field('tel') ?>'>Зв'язатися</button>









	</div>





</div><!-- #post-<?php the_ID(); ?> -->

<!--  wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dobrobat' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		-->