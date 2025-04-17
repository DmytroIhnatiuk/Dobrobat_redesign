<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dobrobat
 */
$isEn = get_locale();
get_header();
?>

<main class="single-news__page bg-secondary">
  <section class="section section__single-news py-70">
    <div class="container">
      <div class="single-news">
      <?php
      while (have_posts()) :
        the_post();
      ?>
        <h1 class="fz-44 t-center">
        <?php the_title(); ?>
        </h1>
        <div class="date fz-16 t-center">
            <?php pll_e("Додано"); ?>: <?php echo get_the_date('d.m.y'); ?>
        </div>
        <div class="single-news__back fz-16 t-center">
          <a href="<?php if ($isEn !== 'en') : ?>/news
                    <?php else : ?>/project-news<?php endif; ?>"> <span><?php pll_e("Всі новини"); ?></span></a>
        </div>
        <div class="single-news__main-img">
          <div class="image ">
              <?= wp_get_attachment_image(get_field('main-img'), 'large', false, array('width' => 'large', 'height' => 'large', 'class' => 'bdr-12'));
              ?>
          </div>
        </div>

        <div class="single-news__wrapper">
          <div class="single-news__intro single-news__descr fz-18"> <?php the_field('first-p')?></div>
          <div class="single-news__descr fz-18">
          <?php the_content(); ?>
          </div>
         <?php if (have_rows('news-gallery')) :?>
          <div class="single-news__photos single-news-photos" data-newsPhotos>
            <div class="single-news-photos__main pos-r ">
              <div class="image" data-mainPhoto><img src="#" alt="">
              </div>

            </div>
            <div class="single-news-photos__nav d-flex ">
              <button class="prev">
                <svg class="icon" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.62109 2L4.87867 5.58333L1.62109 9.16667" stroke="#101113" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="arrow-objects" />

                </svg>
              </button>
              <div class="number fz-14 f-600" data-number>
                1
              </div>
              <button class="next">
                <svg class="icon" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.62109 2L4.87867 5.58333L1.62109 9.16667" stroke="#101113" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="arrow-objects" />

                </svg>
              </button>


            </div>	

           
            <div class="single-news-photos__pagination d-flex" data-pagination>
            <?php while(have_rows('news-gallery')): the_row(); ?>
							<?php 
							$image = get_sub_field('news-gallery_item');
							?>
            <div class="image"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>"></div>
        
            <?php endwhile; ?>

         
           
            </div>




          </div>
          <?php endif;?>
        </div>

        <?php endwhile; // End of the loop.
        ?>
      </div>
  </section>








  <?php

  get_footer();
