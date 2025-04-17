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
    <main>
    <section class="section  py-70 legion-item">
        <div class="container">
            <div class="legion-item__wrapper d-flex">
                <div class="legion-item__image image bdr-10">


                    <?php
                    $imageId = get_field('legion_photo') ? get_field('legion_photo') : 13896;
                    echo dn_get_image_attachment($imageId, 'dobrobat_legion', get_the_title());
                    ?>
                </div>

                <div class="content">
                    <div class="legion-item__header bdr-10">
                        <div class="time"><?php pll_e('Додано'); ?>
                            <time><?php echo get_the_date('d.m.Y'); ?></time>
                        </div>
                        <span class="legion__label bdr-10 ">
                                    <?php pll_e('#герої_добробату'); ?>
                                </span>
                        <h1 class="fz-52 t-upper"><?php the_title(); ?></h1>
                        <?php $country = get_field('country'); ?>
                        <div class="legion__country d-flex --align-center">
                            <?php if ($country["flag"]): ?>
                                <div class="flag image">
                                    <?php echo dn_get_image_attachment($country["flag"], 'legion_flag', $country["country_name"]);
                                    ?>
                                </div>
                            <?php endif; ?>
                            <div class="fz-24 f-700"><?= $country["country_name"] ?></div>
                        </div>
                    </div>

                    <?php the_content(); ?>

                </div>
            </div>
        </div>
    </section>
    <section class="section   py-70">
        <div class="container">
            <div class=" legion-item__title d-flex --align-center --just-between --wrap">
                <h2 class="fz-52 t-center f-600">Інтернаціональний легіон</h2>
                <a href="/legion" class="btn btn_outline  ">
                    <span>Більше</span> </a>
            </div>
            <div class="legion-slider swiper">
                <div class="swiper-wrapper">
                        <?php
                    $args = array(
                    'post_type'      => 'legion',
                    'posts_per_page' => -1,
                    'post__not_in'   => array(get_the_ID())
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                    $the_query->the_post();?>
                        <div class="swiper-slide">
                            <?php if (get_field('country', get_the_ID())["flag"]): ?>
                                <div class="flag image">
                                    <?php echo dn_get_image_attachment(get_field('country', get_the_ID())["flag"], 'legion_flag', get_field('country', get_the_ID())["country_name"]);
                                    ?>
                                </div>
                            <?php endif; ?>

                            <div class="legion-slider__item  bdr-10  ">

                                <a href="<?= esc_url(get_permalink(get_the_ID())); ?>" class="image bdr-10">
                                    <?php
                                    $imageId = get_field('legion_photo') ? get_field('legion_photo') : 13896;
                                    echo dn_get_image_attachment($imageId, 'dobrobat_legion', get_the_title());
                                    ?>
                                </a>
                                <span class="legion__label bdr-10 ">
                 #інтернаціональний_легіон
                                </span>
                                <h3 class=" t-upper"><?php the_title(); ?></h3>
                                <div class="f-600"><?= get_field('country', get_the_ID())["country_name"]; ?></div>
                                <a href="<?= esc_url(get_permalink(get_the_ID())); ?>" class="t-upper fz-14 f-600 t-under">читати більше</a>


                            </div>

                        </div>

                <?php    }
                    }

                   wp_reset_postdata();


             ?>



                </div>
                <div class="swiper__nav d-flex ">
                    <div class="controls d-flex">
                        <button class="legion-slider__prev">
                            <svg class="icon arrow prev">
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </button>
                        <button class="legion-slider__next">
                            <svg class="icon arrow">
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </section>


<?php

get_footer();
