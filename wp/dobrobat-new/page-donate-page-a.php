<?php /* Template Name: Donate page A*/ ?>
<?php
get_header();
?>

    <main class="donate-page">

        <section class="section section__main-screen-donate pos-r py-70">
            <div class="main-screen-donate">
                <div class="container d-flex --wrap">
                    <div class="main-screen-donate__descr">
                        <h1 class="fz-54 f-600 t-upper">
                            <?php pll_e('Відбудуємо Україну разом!'); ?>
                        </h1>
                            <?php if (have_rows('statistics')): ?>
                        <div class="d-flex main-screen-donate__information">
                             <?php while (have_rows('statistics')): the_row();
                        $number = get_sub_field('number');
                        $description = get_sub_field('description');
                        ?>
                            <div class="item d-flex f-600 --align-center">
                                <div class="title  t-ac">    <?php echo $number; ?></div>
                                <div class="fz-18">       <?php echo $description; ?>
                                </div>
                            </div>
                             <?php endwhile; ?>

                        </div>
                            <?php endif; ?>
                        <div class="main-screen-donate__text f-400">
                            <?php pll_e('Натисніть на кнопку та зробіть свій вклад у відновлення України'); ?>
                        </div>
                        <a href="https://telegram.me/dobrobat_in_ua_bot?start" class="btn btn_donate ">donate</a>
                    </div>
                    <div class="main-screen-donate__gallery">
                        <div class="main-screen-donate__image ">
                            <div class="image">
                                <img src="https://www.dobrobat.in.ua/wp-content/uploads/2023/02/1.png" alt="">
                            </div>

                        </div>
                        <div class="main-screen-donate__image">
                            <div class="image">
                                <img src="https://www.dobrobat.in.ua/wp-content/uploads/2023/02/24.png" alt="">
                            </div>
                        </div>
                        <div class="main-screen-donate__image">
                            <div class="image">
                                <img src="https://www.dobrobat.in.ua/wp-content/uploads/2023/02/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                            <?php if (have_rows('statistics')): ?>
                    <div class="d-flex main-screen-donate__information">
                        <?php while (have_rows('statistics')): the_row();
                            $number = get_sub_field('number');
                            $description = get_sub_field('description');
                            ?>
                            <div class="item d-flex f-600 --align-center">
                                <div class="title  t-ac">    <?php echo $number; ?></div>
                                <div class="fz-18">       <?php echo $description; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                            <?php endif; ?>


                </div>

            </div>
        </section>
        <section class="section section__donate-page-objects pos-r">
            <div class="container">
                <div class="donate-page-objects t-white">
                    <div class="d-flex donate-page-objects__title --wrap">
                        <h2 class="fz-52 t-white"><?php pll_e('Об’єкти які потребують допомоги'); ?></h2>
                        <a href="/objects" class="btn btn_white t-upper  ">
<span>
    <?php pll_e('БІЛЬШЕ ОБ’єктів'); ?>

 </span> </a>
                    </div>

                    <div class="swiper donate-page-objects__renewed">
                        <div class="swiper-wrapper ">
                         <?php
                    $args = array(
                        'post_type' => array('objects'),
                        'post_status' => array('publish'),
                        'nopaging' => true,
                        'order' => 'DESC',
                        'orderby' => 'date',
                        // 'cat' => 1,
                    );
                    if (get_locale() == 'en') {
                        $args['lang'] = 'en';
                    }
                    $posts = query_posts($args);

                    foreach ($posts as $index => $post) {
                        if ($index + 1 <= 10):
                            $postId = $post->ID;
                            $title = get_field('infrostructure', $post->ID);
                            $city = get_field('city', $post->ID);
                            $mainImg = get_field('photo', $post->ID);
                            $url = get_permalink($post->ID);
                            ?>
                            <div class="swiper-slide">
                                <div class="donate-page-objects__item  bdr-10">
                                    <div class="donate-page-objects__img pos-r">
                                        <a href="<?php echo $url?>" class="image bdr-10"><img alt="" class="swiper-lazy swiper-lazy-loaded"
                                                                     src="<?php echo $mainImg[0]['img']?>">

                                        </a>
                                    </div>
                                    <div class="donate-page-objects__descr">
                                        <div class="f-800">
                                             <?php echo $city?>
                                        </div>
                                        <div class="f-400">
                                            <?php echo $title?>
                                        </div>
                                        <a href="<?php echo $url?>" class=" fz-14 t-upper t-under  f-600">
                                            <?php pll_e('переглянути'); ?>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        <?php endif;
                    }


                         ?>


                        </div>
                        <div class="swiper__nav white d-flex">
                            <div class="controls d-flex">
                                <button class="donate-page-objects__renewed__prev ">
                                    <svg class="icon arrow prev">
                                        <use xlink:href="#arrow"></use>
                                    </svg>

                                </button>
                                <button class="donate-page-objects__renewed__next">
                                    <svg class="icon arrow ">
                                        <use xlink:href="#arrow"></use>
                                    </svg>

                                </button>
                            </div>
                            <div class="counter ">
                                <span class="counter__current f-700">1</span>
                                <span class="counter__total">10</span>
                            </div>
                        </div>
                        <a href="/objects" class="btn btn_white t-upper  ">
<span>
   <?php pll_e('БІЛЬШЕ ОБ’єктів'); ?></span> </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section__donate-page-needs pos-r py-70 donate-page-needs">
            <div class="container">
                <div class="donate-page-needs__title d-flex">
                    <h2 class="fz-52"><?php pll_e('Ми потребуємо'); ?></h2>
                    <a href="/news" class="btn btn_donate t-upper  ">
                        <span>DONATE</span> </a>
                </div>
                <div class="donate-page-needs__items">
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#window"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('ВІКНА'); ?></div>
                    </div>
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#roof"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('ПОКРІВЛЯ'); ?></div>
                    </div>
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#brick"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('БУДМАТЕРІАЛИ'); ?></div>
                    </div>
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#bus"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('транспорт'); ?></div>
                    </div>
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#door"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('ДВЕРІ'); ?></div>
                    </div>
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#food"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('ХАРЧУВАННЯ'); ?></div>
                    </div>
                    <div class="donate-page-needs__item d-flex --align-center">
                        <div class="img d-flex --align-center --just-center">
                            <svg class="icon">
                                <use xlink:href="#materials"></use>
                            </svg>
                        </div>
                        <div class="name fz-24 t-upper"><?php pll_e('РОЗХІДНІ МАТЕРІАЛИ'); ?></div>
                    </div>

                </div>
                <a href="/news" class="btn btn_donate t-upper  ">
                    <span>DONATE</span> </a>
            </div>
        </section>

    <section class="section section__news py-40">
        <div class="container">
            <div class="d-flex --align-center --just-between --wrap">
                <h2 class="fz-52 t-center">
                    <?php pll_e('Новини проєкту'); ?>
                </h2>

                <a href="<?php $isEn = get_locale();
                if ($isEn !== 'en') : ?>/news
                    <?php else : ?>/project-news<?php endif; ?>" class="btn btn_outline t-upper ">
                    <span>
                        <?php pll_e('БІЛЬШЕ НОВИН'); ?>
                        </span> </a>
            </div>
            <div class="main-screen__news">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => array('news'),
                        'post_status' => array('publish'),
                        'posts_per_page' => 10,
                        'nopaging' => true,
                        'order' => 'DESC',
                        'orderby' => 'date',
                        // 'cat' => 1,
                    );
                    if (get_locale() == 'en') {
                        $args['lang'] = 'en';
                    }
                    $posts = query_posts($args);

                    foreach ($posts as $index => $post) {
                        if ($index + 1 <= 10):
                            $postId = $post->ID;
                            $title = get_the_title($post->ID);
                            $date = get_the_date('d.m.y', $post->ID);
                            $mainImg = get_field('main-img', $post->ID);
                            $url = get_permalink($post->ID);
                            ?>

                            <div class="swiper-slide">
                                <a href="<?php echo $url; ?>" class="main-screen__news-item d-flex --dir-col">
                                    <div class="image">
                                        <img src="<?php echo $mainImg ?>" alt="<?php echo $title ?>">
                                    </div>
                                    <div class="text fz-18 f-600">
                                        <?php echo $title ?>
                                    </div>
                                    <div class="main-screen__news-item__footer d-flex --just-between">
                                        <span class="fz-16"><?php pll_e('Додано'); ?> <?php echo $date ?></span><span
                                                class="t-upper fz-14 f-600"><?php pll_e('Переглянути'); ?></span>
                                    </div>
                                </a>
                            </div>

                        <?php endif;
                    }


                    ?>
                </div>
                <div class="swiper-news__nav d-flex --just-end">
                    <div class="controls d-flex">
                        <button class="swiper-news__prev">
                            <svg class="icon arrow prev">
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </button>
                        <button class="swiper-news__next">
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
                <a href="<?php $isEn = get_locale();
                if ($isEn !== 'en') : ?>/news
                    <?php else : ?>/project-news<?php endif; ?>" class="btn btn_outline t-upper ">
                    <span>
                        <?php pll_e('БІЛЬШЕ НОВИН'); ?>
                        </span> </a>
            </div>
        </div>
    </section>

<?php
get_footer();
?>