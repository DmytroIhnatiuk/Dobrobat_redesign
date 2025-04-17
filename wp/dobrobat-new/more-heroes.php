<section class="section section__heroes  py-70">
    <div class="container">
        <div class="section__heroes-title d-flex --align-center --just-between --wrap">
            <h2 class="fz-52 t-center">   <?= pll_e('Герої «Добробату»'); ?></h2>
            <a href="/heroes" class="btn btn_outline  ">
                <span>   <?= pll_e('Читати більше'); ?></span> </a>
        </div>
        <div class="heroes-slider swiper">
            <div class="swiper-wrapper">
                <?php $args = [
                    'post_type' => 'heroes',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'orderby' => 'date',
                ];
                if (get_locale() == 'en') {
                    $args['lang'] = 'en';
                }
                foreach (get_posts($args) as $heroesItem) {


                    ?>

                    <div class="swiper-slide">
                        <div class="heroes-slider__item d-flex bdr-10 bg-white ">
                            <a href="<?= get_permalink($heroesItem->ID) ?>" class="image bdr-10">
                                <img src="<?= get_field('heroes_main_img', $heroesItem->ID) ?>" alt="">
                            </a>
                            <div class="heroes-slider__descr d-flex --dir-col">
                                <h3 class="fz-24 t-upper"><?= get_field('heroes_name', $heroesItem->ID) ?></h3>
                                <div class="text fz-18">
                                    <?= trim_text_to(get_field('heroes_text', $heroesItem->ID), 200); ?>
                                </div>

                                <div class="heroes-slider__item-footer">
                                    <a href="<?= get_permalink($heroesItem->ID) ?>" class="t-upper fz-14 f-600"><?= pll_e('Переглянути'); ?></a>
                                </div>
                            </div>


                        </div>
                        <span class="heroes__label  bdr-10">
                                    <?= pll_e('#герої_добробату'); ?>

                                </span>
                    </div>

                    <?php
                }
                ?>

            </div>
            <div class="swiper__nav d-flex">
                <div class="controls d-flex">
                    <button class="heroes-slider__prev">
                        <svg class="icon arrow prev">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </button>
                    <button class="heroes-slider__next">
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

    </div>

</section>