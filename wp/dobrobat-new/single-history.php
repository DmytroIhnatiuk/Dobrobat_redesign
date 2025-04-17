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
    <main class="page-template single">
        <?php
        $name = get_the_title();
        $address = get_field('address');


        ?>
        <section class="section ">
            <div class="container">
                <div class="page-template__wrapper d-flex">
                    <div class="page-template__image image bdr-10">
                        <?php
                        $imageId = get_post_thumbnail_id() ? get_post_thumbnail_id() : 15148;

                        echo dn_get_image_attachment($imageId, 'dobrobat_team', false, get_the_title());
                        ?>
                    </div>
                    <div class="content">
                        <span class="page-template__label  bg-ac  bdr-10 mb-2">
                            <?= pll_e('#історія_добробату'); ?>
                        </span>
                        <div class="fz-18 f-weight_400 page-template__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php ?>

    </main>

<?php

get_footer();
