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
    <main class="heroes-item">
        <?php
        $name = get_field('heroes_name');
        $adress = get_field('heroes_adress');
        $text = get_field('heroes_text');

        ?>
        <section class="section section__heroes-item py-70">
            <div class="container">
                <div class="heroes-item__wrapper d-flex">
                    <div class="heroes-item__image image bdr-10">
                        <?= wp_get_attachment_image(get_field('heroes_main_img'), 'dobrobat_team', false, array('width' => 'dobrobat_team', 'height' => 'dobrobat_team',  'alt' => $name));
                        ?>
                    </div>
                    <div class="content">
                <span class="heroes__label  bdr-10">
                    <?= pll_e('#герої_добробату'); ?>

                                </span>
                        <div class="heroes-item__title"><h1 class="fz-52 t-upper"><?= $name ?></h1>
                            <div class="fz-24 f-700"><?= $adress ?></div>
                        </div>
                        <div class="fz-18 heroes-item__text">
                            <?= $text; ?>
                        </div>
                        <?php if (get_field('heroes_video')): ?>
                            <div class="video bdr-10">
                                <iframe id="player" frameborder="0" allowfullscreen="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        title="<?= pll_e('#герої_добробату'); ?> <?= $name ?>"
                                        src="<?= get_field('heroes_video') ?>"
                                ></iframe>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('heroes_gallery')): ?>
                            <div class="heroes-item__gallery">
                                <div class="swiper-wrapper">
                                    <?php foreach (get_field('heroes_gallery') as $item) { ?>
                                        <div class="swiper-slide">
                                            <div class="image bdr-10">
                                                <img src="<?= $item['img'] ?>" alt="">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper__nav d-flex">
                                    <div class="controls d-flex">
                                        <button class="heroes-item__gallery-slider__prev">
                                            <svg class="icon arrow prev">
                                                <use xlink:href="#arrow"></use>
                                            </svg>
                                        </button>
                                        <button class="heroes-item__gallery-slider__next">
                                            <svg class="icon arrow">
                                                <use xlink:href="#arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="counter ">
                                        <span class="counter__current f-700">1</span>
                                        <span class="counter__total">10</span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php ?>
        <?php echo get_template_part('template-parts/more-heroes'); ?>
    </main>

<?php

get_footer();
