<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dobrobat
 */

get_header();
?>

    <main class="single-obj__page">
    <div class="container">
        <section class="section section__object-item  py-70">
            <div class="objects-item single-obj" id="objects-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>">
                <div class="objects-item__photos ads-item-photos pos-r" data-objectsPhotos="">
                    <div class="pos-a zoom-info">Для збільшення зображення - натисніть на фото</div>
                    <div class="objects-item-photos__main pos-r ">
                        <div class="image" data-mainPhoto><img src="#" alt="">

                        </div>
                        <div class="objects-item-photos__nav d-flex pos-a">
                            <button class="prev disabled">
                                <svg class="icon" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.62109 2L4.87867 5.58333L1.62109 9.16667" stroke="#101113"
                                          stroke-width="3"
                                          stroke-linecap="round" stroke-linejoin="round" class="arrow-ads"></path>

                                </svg>
                            </button>
                            <div class="number fz-14 f-600" data-number>1</div>
                            <button class="next">
                                <svg class="icon" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.62109 2L4.87867 5.58333L1.62109 9.16667" stroke="#101113"
                                          stroke-width="3"
                                          stroke-linecap="round" stroke-linejoin="round" class="arrow-ads"></path>

                                </svg>
                            </button>


                        </div>
                    </div>

                    <?php if (have_rows('photo')): ?>
                        <div class="objects-item-photos__pagination d-flex" data-pagination="">
                            <?php while (have_rows('photo')): the_row();
                                $image = get_sub_field('img');
                                $index = array_rand(get_field('photo'));
                                ?>
                                <div class="image" data-img-item="<?php echo $index ?>">
                                    <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">

                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="objects-item__header d-flex">
                    <div>
                        <h2 class="name f-600 fz-24">    <?php the_title(); ?></h2>
                        <div class="d-flex">
                            <div class="date f-600 fz-16 t-secondary"><?php echo get_the_date('d.m.y'); ?></div>
                            <div class="location f-600 t-secondary fz-16">
                                <?php the_field('region') ?> обл,
                                <?php the_field('city') ?>
                            </div>


                        </div>

                    </div>

                    <a href="<?php the_field('doc') ?>"
                       class="d-flex objects-item__doc" target="_blank"><span class="doc"><svg width="19" height="24"
                                                                                               viewBox="0 0 19 24"
                                                                                               fill="none"
                                                                                               xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M11.7031 0.984863C11.9952 0.984863 12.2754 1.10091 12.482 1.30749L17.9895 6.81503C18.1961 7.0216 18.3121 7.30178 18.3121 7.59391V19.7105C18.3121 21.5355 16.8326 23.015 15.0076 23.015H3.99251C2.16747 23.015 0.687988 21.5355 0.687988 19.7105V4.28939C0.687988 2.46435 2.16747 0.984863 3.99251 0.984863H11.7031ZM9.49891 3.18785H3.99247C3.38413 3.18785 2.89096 3.68102 2.89096 4.28936V19.7105C2.89096 20.3188 3.38413 20.812 3.99247 20.812H15.0076C15.6159 20.812 16.1091 20.3188 16.1091 19.7105V9.7969H10.6015C10.0366 9.7969 9.57105 9.37168 9.50742 8.82386L9.50001 8.6954L9.49891 3.18785ZM15.6531 7.59388L11.702 3.64387L11.7031 7.59388H15.6531Z"
                          fill="#FCD80C"/>
                  </svg></span>
                        <span class="fz-16"> Документація об'єкту #<?php the_ID(); ?></span></a>
                </div>
                <div class="objects-item__content">
                    <div class="objects-item__filter">
                        <div class="filter-items__wrapper">
                            <div class="filter-items">
                                <div class="filter-items__infrastructure">
                                    <div class="filter-items__title fz-14 f-700">
                                        <?php pll_e("Тип інфраструктури:"); ?>

                                    </div>
                                    <div class="d-flex">

                                        <span><?php the_field('infrostructure') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-items">
                                <div class="filter-items__types">
                                    <div class="filter-items__title fz-14 f-700">
                                        <?php pll_e("Види ремонтних робіт:"); ?>
                                    </div>
                                    <?php ?>
                                    <div class="d-flex">

                                        <span>   <?php the_field('types') ?> </span>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="objects-item__info">

                        <div class="descr">
                            <?php the_content() ?>
                        </div>


                    </div>

                    <div class="objects-item__footer d-flex">


                    </div>

                </div>


            </div>
        </section>
        <section class="section section__support  py-40">
            <?php if (have_rows('celebrity')): ?>
            <h2 class="fz-54 f-600">
                <?php pll_e('Ініціатива збору коштів для нагального відновлення'); ?>
            </h2>
            <div class="support__wrapper d-flex">


                <div class="celebrity__item  card t-white">
                    <?php while (have_rows('celebrity')): the_row();
                        $photo = get_sub_field('photo');
                        $action = get_sub_field('action');
                        $name = get_sub_field('name');
                        $link_instagram = get_sub_field('link_instagram');
                        ?>
                        <div class="image">
                            <img src="<?php echo $photo; ?>"
                                 alt="<?php echo $photo; ?>">
                        </div>
                        <div class="name fz-24 f-600 ">
                            <?php echo $name; ?>
                        </div>

                        <div>
                            <?php echo $action; ?>
                        </div>


                        <a href="<?php echo $link_instagram; ?>" class="t-upper">instagram</a>
                    <?php endwhile; ?>
                </div>

                <?php endif; ?>
                <div class="donate d-flex">
                    <div class="wrapper t-center">
                        <h2 class=" fz-54">
                            Як я можу допомогти?
                        </h2>
                        <div class="donate__descr fz-24">
                            Зроби свій благодійний внесок та приєднуйся до команди, що творить добро.
                        </div>
                        <div class="donate__descr fz-24 f-600">
                            Підтримай відбудову України донатом чи репостом у соцмережах.
                        </div>
                        <div class="donate__btns d-flex">
                            <button class="btn  btn_gray" data-donate='<?php the_ID(); ?>'>
                                <span> Пожертвувати кошти</span>
                            </button>

                            <a target="blank"
                               href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>"
                               class="btn btn_gray btn_social">
                                <svg class="icon">
                                    <use xlink:href="#fb"></use>
                                </svg>
                            </a>

                            <?php if (get_field('post_instagram')): ?>
                                <a target="blank" href="<?php get_field('post_instagram'); ?>"
                                   class="btn btn_gray btn_social">
                                    <svg class="icon">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>


        </section>

    </div>
    <section class="section section__renewed py-70">
        <div class="container pos-r">
            <h2 class="fz-54 f-600">
                Відремонтовані об’єкти
            </h2>
            <div class="renewed pos-r py-40">


                <div class="swiper swiper-renewed">

                    <div class="swiper-wrapper">


                    </div>

                </div>


            </div>
            <div class="swiper-renewed__nav d-flex">
                <div class="controls d-flex">
                    <button class="swiper-renewed__prev">
                        <svg class="icon arrow prev">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </button>
                    <button class="swiper-renewed__next">
                        <svg class="icon arrow">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </button>
                </div>
                <div class="counter hide">
                    <span class="counter__current f-700">1</span>
                    <span class="counter__total"></span>


                </div>


            </div>
        </div>
    </section>
    <section class="section section__singlObj-footer d-flex">

        <div class="container">
            <div class="single-obj__footer d-flex">
                <div class="wrapper">
                    <h2 class="fz-52">
                        Відбудуємо Україну разом!
                    </h2>
                    <div class="fz-24">
                        Вступайте до рядів Добробату або допомагайте по своїм можливостям, тут кожен матиме, що робити!
                    </div>
                    <a href="https://telegram.me/dobrobat_in_ua_bot?start" class="btn btn_ac" data-telegram="">

                        <span>Допомогти </span>
                    </a>
                </div>
            </div>
        </div>

    </section>









<?php

get_footer();
