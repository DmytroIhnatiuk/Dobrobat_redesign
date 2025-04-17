<?php /* Template Name: Оголошення */ ?>
<?php
get_header();
?>
<main class="advertisement">

	<section class="section section__ads ">
		<div class="ads t-acent d-flex">
			<div class="container">
				<h1 class="fz-36 t-upper t-center">оголошення
				</h1>
				<div class="row" data-ads>
					<?php if (have_posts()) : ?>
					<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();
							get_template_part('template-parts/content', get_post_type());
						endwhile;

						the_posts_navigation();


					endif;
					?>

		


				</div>


			</div>
		</div>

	</section>

</main>

<?php
get_footer();
?>