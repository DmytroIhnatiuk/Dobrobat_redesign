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
    <main class="stories-victims">
        <?php
        $name = get_the_title();
        $address = get_field('address');


        ?>
        <section class="section ">
            <div class="container">
                <div class="heroes-item__wrapper d-flex">
                    <div class="heroes-item__image image bdr-10">
                        <?php
                        $imageId = get_post_thumbnail_id() ? get_post_thumbnail_id() : 15148;

                        echo dn_get_image_attachment($imageId, 'dobrobat_team', false, get_the_title());
                        ?>
                    </div>
                    <div class="content">
                <span class="heroes__label  bdr-10 mb-2">
                    <?= pll_e('#історії_сповіді'); ?>

                                </span>
                        <div class="heroes-item__title"><h1 class="fz-52 t-upper"><?= $name ?></h1>
                            <div class="fz-24 f-700"><?= $address ?></div>
                        </div>
                        <div class="fz-18 heroes-item__text">
                            <?php the_content(); ?>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <?php ?>
        <?php echo get_template_part('template-parts/more-heroes'); ?>
    </main>

<?php

get_footer();
