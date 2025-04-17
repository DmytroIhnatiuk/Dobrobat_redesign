<?php /* Template Name: Преса про нас */ ?>
<?php
get_header();
?>
<main class="news-page">

	<section class="section section__news ">
		<div class="news t-acent d-flex">
			<div class="container">
				<h1 class="fz-36 t-upper t-center"> Преса про нас
				</h1>
				<div class="row" data-news>
					<?php if (have_posts()) : ?>
					<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();
							get_template_part('template-parts/content-press', get_post_type());
						endwhile;

						the_posts_navigation();


					endif;
					?>

		


				</div>


			</div>
		</div>

	</section>



<?php
get_footer();
?>