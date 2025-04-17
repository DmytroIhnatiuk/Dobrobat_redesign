<?php /* Template Name: Academy Page*/ ?>
<?php
get_header();
?>

    <main class="academy-page">
        <section class="section  pos-r goal py-70">
            <div class="container">
                <h2 class=" fz-52">
                    <?php pll_e('Місія проєкту'); ?>
                </h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image">
                            <img src="https://www.dobrobat.in.ua/wp-content/uploads/2022/10/photo_2022-10-19_20-32-47.jpg"
                                 alt="Photo">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="fz-24 f-600 mb-3">
                            <?php pll_e('ГО «Добробат» – неприбуткова організація, створена для відбудови
                        країни та допомоги українцям у нагальному відновленні житла та соціальної інфраструктури на
                        деокупованих територіях'); ?>
                        </div>
                        <div>
                            <?php pll_e('Щоденно волонтери з сімох батальйонів «Добробату» – Київської, Чернігівської, Сумської,
                        Харківської, Миколаївської, Херсонської областей та Запоріжжя – розбирають завали та
                        нагально відновлюють зруйновані внаслідок повномасштабного вторгнення армії рф будинки та
                        об’єкти соціальної інфраструктури. Потужна волонтерська команда вірить в силу єднання та
                        взаємодопомогу.'); ?>
                        </div>
                    </div>
                </div>
                <div class="donate d-flex">
                    <div class="wrapper t-center ">

                        <div class="donate__descr fz-24 f-600">
                            <?php pll_e('«Ми прагнемо не лише відновлювати зруйноване, а й будувати міцне ком‘юніті, що ґрунтується
                        на спільних цінностях. Наша місія – показати, що разом ми здатні побороти будь-які
                        випробування та побудувати наше краще майбутнє»'); ?>

                        </div>


                    </div>

                </div>
            </div>
        </section>
        <?php if (1 !== 1): ?>

            <section class="section academy-page__hero">
                <div class="container">
                    <div class="row --align-end academy-page__title">
                        <div class="col-lg-9">
                            <h1>
                                <?= the_title(); ?>
                            </h1>
                        </div>
                        <div class="col-lg-3">
                            <a href="#donate-section" class="btn btn_ac scrolTo">
                                <?php pll_e('Підтримати'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="academy-page__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-main-1.jpg' ?>">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-main-2.jpg' ?>">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-main-3.jpg' ?>">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-main-4.jpg' ?>">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-main-5.jpg' ?>">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-main-6.jpg' ?>">
                                </div>
                            </div>

                        </div>
                        <div class="swiper-academy-page__nav d-flex">
                            <div class="controls d-flex">
                                <button class="swiper-academy-page__prev">
                                    <svg class="icon arrow prev">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>
                                <button class="swiper-academy-page__next">
                                    <svg class="icon arrow">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section academy-page__about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>
                                <?php pll_e('Про збір'); ?>
                            </h2>
                            <div class="text-accent">
                                <?php the_field('restoration_text_1') ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="about-video d-flex --just-start">
                                <iframe width="330" height="100%"
                                        src="https://www.youtube.com/embed/ESzNv8q5rGw??autoplay=0&loop&=1&enablejsapi=1&controls=2&color=white&modestbranding=showinfo=0&mute=0&rel=0&showinfo=0&enablejsapi=1&widgetid=1&iv_load_policy=3&modestbranding=1"
                                        title="Звернення Смірнова" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="text-main">
                                <?php the_field('restoration_text_2') ?>
                            </div>
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/academy.png' ?>">

                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section ">
                <div class=" container">
                    <div class="academy-page__goal">
                        <h2 class="pos-r">
                            <?php pll_e('Аби відновити повноцінне навчання в академії, потрібно відбудувати приміщення корпусу'); ?>
                        </h2>
                        <div class="d-flex --just-between pos-r">
                            <div class="text">
                                <?php pll_e('Для відновлення будівлі та її приміщень необхідно зібрати'); ?>
                            </div>
                            <div class="academy-goal">
                                <div class="academy-goal__title">5 000 000.00 ₴</div>
                                <!--                            <div class="academy-goal__status pos-r">-->
                                <!--                                <div class="progress d-flex --just-center">-->
                                <!---->
                                <!--                                </div>-->
                                <!--                            </div>-->
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <section class="section academy-page__video">
                <div class="container">
                    <div class="video">
                        <iframe id="player" frameborder="0" allowfullscreen="1"
                                allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                title="Добровольчий будівельний батальйон «Добробат»" width="640" height="360"
                                src="https://www.youtube.com/embed/evpRo71lQrAhttps://www.advancedcustomfields.com/pro/?autoplay=0&loop&=1&enablejsapi=1&controls=2&color=white&modestbranding=showinfo=0&mute=0&rel=0&showinfo=0&enablejsapi=1&widgetid=1&iv_load_policy=3&modestbranding=1"
                        ></iframe>
                    </div>
                </div>
            </section>
            <section id="donate-section" class="section academy-page__donate">
                <div class="container">
                    <h2>
                        <?php pll_e('Як допомогти?'); ?>
                    </h2>
                    <div class="row academy-donate__items">
                        <div class="col-md-12 col-lg-4">
                            <div class="academy-donate__item  d-flex --align-center --dir-col">
                                <div class="academy-donate__title t-upper">
                                    <?php pll_e('Зроби свій благодійний внесок'); ?>

                                </div>
                                <div class="d-flex --just-center summ-wrapper">
                                    <div class="summ">100 <?php pll_e('ГРН'); ?></div>
                                    <div class="summ">200 <?php pll_e('ГРН'); ?></div>
                                    <div class="summ">500 <?php pll_e('ГРН'); ?></div>
                                </div>
                                <a href="https://send.monobank.ua/jar/3XVemyo1nB" target="_blank"
                                   class="btn btn_ac"><?php pll_e('Підтримати'); ?></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="academy-donate__item">
                                <div class="academy-donate__title t-upper">
                                    <?php pll_e('ЗРОБИТИ ДОНАТ'); ?>
                                </div>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/academy-donate_qr.png' ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="academy-donate__item">
                                <div class="academy-donate__title t-upper">
                                    <?php pll_e('РОЗПОВІСТИ'); ?>
                                    <br>
                                    <?php pll_e('ПРО НАС'); ?>
                                </div>
                                <div class="d-flex --just-center">
                                    <a target="blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u=https://www.dobrobat.in.ua/reconstruction-academy/"
                                       class="btn btn_ac btn_social">
                                        <svg class="icon" viewBox="0 0 50 50" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2752 41.6667V25.374H16.666V19.5079H21.2752V14.4974C21.2752 10.5602 23.9978 6.94446 30.2714 6.94446C32.8115 6.94446 34.6897 7.17206 34.6897 7.17206L34.5417 12.65C34.5417 12.65 32.6262 12.6326 30.5359 12.6326C28.2736 12.6326 27.9111 13.6071 27.9111 15.2245V19.5079H34.7216L34.4252 25.374H27.9111V41.6667H21.2752Z"
                                                  fill="#262729"/>
                                        </svg>
                                    </a>
                                    <a target="blank" href="#"
                                       class="btn btn_ac btn_social">
                                        <svg class="icon" viewBox="0 0 50 50" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.3021 19.4423C21.6243 19.4423 19.439 21.6277 19.439 24.3055C19.439 26.9834 21.6243 29.1687 24.3021 29.1687C26.9799 29.1687 29.1652 26.9834 29.1652 24.3055C29.1652 21.6277 26.9799 19.4423 24.3021 19.4423ZM38.8877 24.3055C38.8877 22.2916 38.9059 20.296 38.7928 18.2858C38.6797 15.9509 38.1471 13.8787 36.4397 12.1713C34.7287 10.4602 32.6602 9.93121 30.3253 9.81811C28.3115 9.70501 26.3159 9.72325 24.3057 9.72325C22.2919 9.72325 20.2963 9.70501 18.2861 9.81811C15.9513 9.93121 13.8791 10.4639 12.1717 12.1713C10.4607 13.8823 9.93169 15.9509 9.8186 18.2858C9.7055 20.2997 9.72374 22.2953 9.72374 24.3055C9.72374 26.3157 9.7055 28.315 9.8186 30.3252C9.93169 32.6601 10.4643 34.7323 12.1717 36.4397C13.8827 38.1508 15.9513 38.6798 18.2861 38.7929C20.3 38.906 22.2955 38.8877 24.3057 38.8877C26.3195 38.8877 28.3151 38.906 30.3253 38.7929C32.6602 38.6798 34.7324 38.1471 36.4397 36.4397C38.1508 34.7287 38.6797 32.6601 38.7928 30.3252C38.9096 28.315 38.8877 26.3194 38.8877 24.3055ZM24.3021 31.7882C20.1613 31.7882 16.8195 28.4463 16.8195 24.3055C16.8195 20.1647 20.1613 16.8228 24.3021 16.8228C28.4428 16.8228 31.7846 20.1647 31.7846 24.3055C31.7846 28.4463 28.4428 31.7882 24.3021 31.7882ZM32.091 18.2639C31.1243 18.2639 30.3435 17.4832 30.3435 16.5164C30.3435 15.5496 31.1243 14.7688 32.091 14.7688C33.0578 14.7688 33.8385 15.5496 33.8385 16.5164C33.8388 16.746 33.7938 16.9733 33.7061 17.1855C33.6184 17.3976 33.4897 17.5904 33.3274 17.7527C33.165 17.9151 32.9723 18.0438 32.7601 18.1315C32.548 18.2192 32.3206 18.2642 32.091 18.2639Z"
                                                  fill="#262729"/>
                                        </svg>

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section academy-page__about-academy">
                <div class="container">
                    <div class="row academy-page__title">
                        <div class="col-lg-4">
                            <h2><?php pll_e('Про академію'); ?></h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="text-accent">
                                <?php the_field('restoration_about') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="image">


                                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-academy-1.png' ?>">

                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-academy-2.png' ?>">

                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/about-academy-3.png' ?>">

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="section academy-page__about-academy academy-page__about-academy_2">
                <div class="container">
                    <h2>
                        <?php pll_e('В академії вчаться'); ?>

                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="academy-page__about-academy-item">
                                <div class="h2">
                                    300
                                </div>
                                <div class="text-accent f-400">
                                    <?php pll_e('школярів та дошкільнят'); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="academy-page__about-academy-item">
                                <div class="h2">
                                    150
                                </div>
                                <div class="text-accent f-400">
                                    <?php pll_e('дітей, які проходять реабілітацію (крім тих, що навчаються)'); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="academy-page__about-academy-item">
                                <div class="h2">
                                    700
                                </div>
                                <div class="text-accent f-400">
                                    <?php pll_e('студентів, які 90% часу проводять у будівлі академії'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>
                        <?php pll_e('Кошти потрібні на відновлення'); ?>
                    </h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    01
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Навчального корпусу'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    02
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Спального корпусу'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    03
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Реабілітаційного корпусу'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    04
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Корпусу відділення дошкільної освіти'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    05
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Спортивної зали'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    06
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Їдальні'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="academy-page__about-academy-item d-flex --align-center">
                                <div class="number d-flex --align-center --just-center text-24 f-600">
                                    07
                                </div>
                                <div class="text-24 f-400">
                                    <?php pll_e('Бібліотеки'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex --align-center t-center h-100">
                                <div class="text-main f-400">
                                    <?php pll_e('Ознайомитись із повним переліком необхідних матеріалів можна тут'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex --align-center h-100">

                                <?php $isEn = get_locale();
                                $link = 'https://docs.google.com/spreadsheets/d/1aA3EOnIVCf8WYShlHGceK7hnnb6yvPBu/edit#gid=1046967184';
                                if ($isEn == 'en') {
                                    $link = "https://docs.google.com/spreadsheets/d/1vLn5UoViD445Xe7hsqgdDWQzZ740mkvG/edit#gid=839413732";
                                } ?>

                                <a href="<?= $link; ?>" class="btn btn_ac">
                                    <span> <?php pll_e('ОЗНАЙОМИТИСЬ'); ?></span>
                                    <span class="doc"><svg class="icon"><use xlink:href="#doc"></use></svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section academy-page__footer">
                <div class="container">
                    <div class="d-flex --just-center --align-center --dir-col">
                        <h2 class="t-white t-center">
                            <?php pll_e('Пам’ятайте, кожен донат важливий.
                        Ваш внесок – це цеглинка у відновленні храму знань дітей!'); ?>
                        </h2>
                        <a href="#donate-section" class="btn btn_ac scrolTo"><?php pll_e('Підтримати'); ?></a>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>
<?php
get_footer();
?>