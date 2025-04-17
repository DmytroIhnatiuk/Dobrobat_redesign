<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailer
 */

get_header();
?>

<main id="primary">
	<section class="section section__page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-item">


						<?php
						while (have_posts()) :
							the_post();

							get_template_part('template-parts/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.



						endwhile; // End of the loop.
						?> </div>
				</div>


			</div>
		</div>
	</section>



</main><!-- #main -->

<?php

get_footer();
