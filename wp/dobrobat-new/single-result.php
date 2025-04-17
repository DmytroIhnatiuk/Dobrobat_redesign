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
    <main class="objects-landing">
        <section class="hero__section">
            <div class="container">
                <div class="hero">
                    <div class="hero__description">
                        <h1 class="fz-52 ">
                            <?php the_title(); ?>

                        </h1>
                        <div class="location d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                 fill="none">
                                <path d="M20 0C16.0234 0.00527509 12.2111 1.58732 9.39922 4.39922C6.58732 7.21113 5.00528 11.0234 5 15C5 25.7687 18.975 39.2563 19.5687 39.825C19.6842 39.9372 19.8389 40 20 40C20.1611 40 20.3158 39.9372 20.4312 39.825C21.025 39.2563 35 25.7687 35 15C34.9947 11.0234 33.4127 7.21113 30.6008 4.39922C27.7889 1.58732 23.9766 0.00527509 20 0ZM20 21.875C18.6403 21.875 17.311 21.4718 16.1805 20.7164C15.0499 19.9609 14.1687 18.8872 13.6483 17.6309C13.128 16.3747 12.9918 14.9924 13.2571 13.6588C13.5224 12.3251 14.1772 11.1001 15.1386 10.1386C16.1001 9.17715 17.3251 8.52237 18.6588 8.2571C19.9924 7.99183 21.3747 8.12798 22.6309 8.64833C23.8872 9.16868 24.9609 10.0499 25.7164 11.1805C26.4718 12.311 26.875 13.6403 26.875 15C26.8739 16.823 26.1492 18.5711 24.8602 19.8602C23.5711 21.1492 21.823 21.8739 20 21.875Z"
                                      fill="#FDC300"/>
                                <defs>
                                    <clipPath id="clip0_1252_1019">
                                        <rect width="40" height="40" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="fz-24">
                                <?= get_field('result_location'); ?>
                            </div>
                        </div>
                    </div>
                    <?php if (have_rows('result_main_gallery')): ?>
                        <div class="hero__gallery">
                            <div class="swiper" data-swiper="object-landing">
                                <div class="swiper-wrapper">
                                    <?php while (have_rows('result_main_gallery')) : the_row(); ?>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <?= dn_get_image_attachment(get_sub_field('image'), 'medium', 'фото'); ?>
                                            </div>
                                        </div>


                                    <?php endwhile; ?>

                                </div>
                            </div>
                        </div>
                    <?php endif;
                    ?>


                </div>


            </div>
        </section>
        <section class=" object-about">
            <div class="container">
                <div class="object-about__wrapper t-white">
                    <h2 class="fz-54">Про об’єкт</h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <?php if (have_rows('result_info')): ?>
                        <div class="object-about__info">
                            <?php while (have_rows('result_info')) : the_row(); ?>

                                <div class="fz-52 t-ac">
                                    <?= get_sub_field('number'); ?>
                                </div>
                                <div>
                                    <?= get_sub_field('description'); ?>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    ?>


                    <div class="object-about__img image">
                        <?php if (get_field('works_image')): ?>
                            <?= dn_get_image_attachment(get_field('image'), 'medium', 'фото' )?>
                        <?php endif; ?>

                    </div>
                    <?php if (have_rows('result_works')):
                        $i = 0;
                        ?>
                        <div class="object-about__works">
                            <h3>Проведені роботи:</h3>
                            <ul>
                                <?php while (have_rows('result_works')) : the_row();
                                    $i++;
                                    $index = str_pad($i, 2, '0', STR_PAD_LEFT);
                                    ?>

                                    <li class="d-flex">
                                        <span class="t-ac">
                                            <?= $index ?>
                                        </span>
                                        <span>
                                            <?= get_sub_field('description'); ?>
                                        </span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>

                        </div>
                    <?php endif;
                    ?>


                </div>
            </div>
        </section>
        <?php if (have_rows('result_gallery')): ?>
            <section class="object-gallery">
                <div class="container">
                    <h2 class="fz-54">
                        Галерея
                    </h2>
                    <div class="swiper" data-swiper="object-landing-gallery">
                        <div class="swiper-wrapper">


                            <?php while (have_rows('result_gallery')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <?= dn_get_image_attachment(get_sub_field('image'), 'medium','фото')  ?>

                                    </div>
                                </div>

                            <?php endwhile; ?>

                        </div>
                        <div class="swiper-landing-gallery__nav d-flex --just-end">
                            <div class="controls d-flex">
                                <button class="swiper-landing-gallery__prev ">
                                    <svg class="icon arrow prev">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>
                                <button class="swiper-landing-gallery__next">
                                    <svg class="icon arrow">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <?php endif;
        ?>

    </main>
<?php

get_footer();
