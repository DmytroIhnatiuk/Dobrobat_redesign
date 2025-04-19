<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trailer
 */
global $IS_NEW;
?>




<?php if (!$IS_NEW): ?>
    <?php if (!is_page_template('page-zigrii.php') && !is_page_template('page-irex.php') && !is_page_template('page-renovation-borodianka.php') && !is_singular('objects') && !is_singular('result') && !is_page(2510) && !is_page(9328)): ?>
        <section id="team" class="section section__team py-40 team t-white">
            <div class="container">
                <div class="team__item">
                    <h2 class="fz-36"> <?php pll_e('Засновники проєкту'); ?> </h2>
                    <div class="founders d-flex">
                        <div class="founders__item card bdr-12">

                            <div class="image pos-r"><span class="pos-a t-upper"><?php pll_e('Засновник'); ?></span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/smirnov.jpg"
                                     alt="<?php pll_e('Ростислав Смірнов'); ?>">
                            </div>
                            <div class="name fz-24 f-800"><?php pll_e('Ростислав Смірнов'); ?></div>
                            <div class="role t-secondary"><?php pll_e('Громадський діяч'); ?></div>
                            <div>
                                <a href="https://www.facebook.com/rostislavsmirnov" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>

                        </div>

                        <div class="founders__item card bdr-12">
                            <div class="image pos-r"><span class="pos-a t-upper"><?php pll_e('Засновник'); ?></span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/andrusiv.JPG"
                                     alt="<?php pll_e("Віктор Андрусів"); ?>">
                            </div>
                            <div class="name fz-24 f-800"><?php pll_e("Віктор Андрусів"); ?></div>
                            <div class="role t-secondary"><?php pll_e("Військовослужбовець ЗСУ"); ?> </div>
                            <div>
                                <a href="https://www.facebook.com/victor.andrusiv" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team__item">
                    <h2 class="fz-36"> <?php pll_e('Амбасадори проєкту'); ?> </h2>
                    <div class="founders ambasadors">
                        <div class="founders__item card bdr-12">
                            <div class="image pos-r"><span
                                        class="pos-a t-upper bg-black t-white"><?php pll_e("Амбасадор"); ?> </span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/chern1.jpeg"
                                     alt="<?php pll_e("Олексій Чернишов "); ?>">
                            </div>
                            <div class="name fz-24 f-800"> <?php pll_e("Олексій Чернишов "); ?> </div>
                            <div class="role t-secondary"> <?php pll_e("СЕО Групи Нафтогаз"); ?>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/NaftogazGroup" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>
                        </div>
                        <div class="founders__item card bdr-12">
                            <div class="image pos-r"><span
                                        class="pos-a t-upper bg-black t-white"><?php pll_e("Амбасадор"); ?> </span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/kreidenko.jpg"
                                     alt="<?php pll_e("Володимир Крейденко"); ?>">
                            </div>
                            <div class="name fz-24 f-800"> <?php pll_e("Володимир Крейденко"); ?> </div>
                            <div class="role t-secondary"> <?php pll_e("Народний депутат України,
                  заступник Голови Комітету ВРУ
                  з питань транспорту та інфраструктури"); ?>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/KreydenkoVolodymyr" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>
                        </div>

                        <div class="founders__item card bdr-12">
                            <div class="image pos-r"><span
                                        class="pos-a t-upper bg-black t-white"><?php pll_e("Амбасадор"); ?> </span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/savchenko.jpg"
                                     alt="<?php pll_e("Владислав Савченко"); ?>">
                            </div>
                            <div class="name fz-24 f-800"> <?php pll_e("Владислав Савченко"); ?> </div>
                            <div class="role t-secondary"> <?php pll_e(" ІТ підприємець, продюсер фільму «Перший код», засновник  фонду «Благодійний фонд Владислава Савченка»"); ?>
                            </div>


                            <div>
                                <a href="https://www.facebook.com/savchenko.vladyslav" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>
                        </div>


                        <div class="founders__item card bdr-12">
                            <div class="image pos-r"><span
                                        class="pos-a t-upper bg-black t-white"><?php pll_e("Амбасадор"); ?> </span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/akopan.jpg"
                                     alt="<?php pll_e("Мері Акопян"); ?>">
                            </div>
                            <div class="name fz-24 f-800"> <?php pll_e("Мері Акопян"); ?> </div>
                            <div class="role t-secondary"> <?php pll_e("Екс-заступниця Міністра внутрішніх справ"); ?>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/mary.akopyan.96" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>
                        </div>
                        <div class="founders__item card bdr-12">
                            <div class="image pos-r"><span
                                        class="pos-a t-upper bg-black t-white"><?php pll_e("Амбасадор"); ?> </span>
                                <img class=""
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/higginbotham.jpeg"
                                     alt="<?php pll_e("Ентоні Хіггінботам"); ?>">
                            </div>
                            <div class="name fz-24 f-800"> <?php pll_e("Ентоні Хіггінботам"); ?> </div>
                            <div class="role t-secondary"> <?php pll_e("член Парламенту Великої Британії"); ?>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/antonyforburnley" class="t-upper"><span>
                  <?php pll_e("Зв'язатися"); ?>
                </span></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="team__item">
                    <h2 class="fz-36"><?php pll_e('Нас підтримали'); ?></h2>
                    <div class="celebrity">
                        <div class="swiper-wrapper"><?php
                            foreach (get_field('blogers', 948) as $bloger) {
                                $name = get_locale() === 'en' ? $bloger['nameEn'] : $bloger['name'];
                                ?>
                                <div class="swiper-slide">
                                    <div class="celebrity__item bdr-12 card">
                                        <div class="image">
                                            <?= wp_get_attachment_image($bloger['photo'], 'dobrobat_celebrity', false, array('width' => 'dobrobat_celebrity', 'height' => 'dobrobat_celebrity', 'class' => '', 'alt' => $name)); ?>
                                        </div>
                                        <div class="name fz-18 f-800">
                                            <?= $name; ?>
                                        </div>
                                        <a href="<?= $bloger['instagram'] ?>" class="t-upper ">instagram</a>
                                    </div>
                                </div>

                            <?php }
                            ?>
                        </div>
                        <div class="celebrity__nav d-flex">
                            <button class="celebrity__prev">
                                <svg class="icon arrow prev">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="celebrity__next">
                                <svg class="icon arrow">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="team__item">
                    <h2 class="fz-36"><?php pll_e('Команда проєкту'); ?></h2>
                    <div class="crew">
                        <?php
                        foreach (get_field('crew', 998) as $teamItem) {
                            $name = get_locale() === 'en' ? $teamItem['nameEn'] : $teamItem['name'];
                            $role = get_locale() === 'en' ? $teamItem['roleEn'] : $teamItem['role'];
                            ?>
                            <div class="crew__item card bdr-12">
                                <div class="image pos-r">
                                    <?= wp_get_attachment_image($teamItem['photo'], 'dobrobat_team', false, array('width' => 'dobrobat_team', 'height' => 'dobrobat_team', 'class' => '', 'alt' => $name)); ?>

                                </div>
                                <div class="name fz-18 f-800">
                                    <?= $name; ?>
                                </div>
                                <div class="role t-secondary">
                                    <?= $role; ?>
                                </div>
                                <a href="<?= $teamItem['instagram'] ?>" class="t-upper ">
                                    <span><?php pll_e('Зв’язатися') ?></span>
                                </a>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="team__support d-flex ">
                    <h2 class="fz-36 f-600">
                        <?php pll_e('    Проєкт реалізується за підтримки:'); ?>
                    </h2>
                    <div class="d-flex team__support-wrapper">
                        <a href="https://www.president.gov.ua/" target="_blank" class="team__support-item d-flex fz-14">
                            <div class="image"><img
                                        src="https://www.dobrobat.in.ua/wp-content/uploads/2022/10/office.png"
                                        alt="<?php pll_e('Офіс президента України'); ?>"></div>
                            <div class="t-upper w-100">
                                <?php pll_e('Офіс президента України'); ?>
                                <!-- test -->
                            </div>
                        </a>
                        <a href="https://www.minregion.gov.ua/about/" target="_blank"
                           class="team__support-item d-flex fz-14">
                            <div class="image"><img
                                        src="https://www.dobrobat.in.ua/wp-content/uploads/2022/09/logo_full_ukr-1-1.png"
                                        alt="<?php pll_e(' Міністерство розвитку громад та територій України'); ?>">
                            </div>
                            <div class="w-100">
                                <?php pll_e(' Міністерство розвитку громад та територій України'); ?>
                            </div>
                        </a>
                        <a href="https://mvs.gov.ua/" target="_blank" class="team__support-item d-flex fz-14">
                            <div class="image"><img
                                        src="https://www.dobrobat.in.ua/wp-content/uploads/2022/09/geraldychnyj_znak_-_emblema_mvs_ukraïny-1.png"
                                        alt="<?php pll_e('Міністерство внутрішніх справ України'); ?>"></div>
                            <div class="w-100">
                                <?php pll_e('Міністерство внутрішніх справ України'); ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="team__item">
                    <h2 class="fz-36"><?php pll_e('Партнерська підтримка'); ?></h2>
                    <div class="wrapper pos-r">
                        <div class="partners-support ">

                            <div class="swiper-wrapper">
                                <?php
                                foreach (get_field('partners', 1009) as $partner) {
                                    $img = '';
                                    if ($partner['photo']) {
                                        $img = wp_get_attachment_image($partner['photo'], 'dobrobat_partners', false, array('width' => 'dobrobat_partners', 'height' => 'dobrobat_partners', 'class' => '', 'alt' => $partner["link"]));
                                    } elseif ($partner['photo-link']) {
                                        $img = '<img src="' . $partner["photo-link"] . '" alt="' . $partner["link"] . '" class="">';
                                    } else {
                                        $img = '<svg class="icon">
    <use xlink:href="#' . $partner["svg"] . '"></use>
    </svg>';
                                    }

                                    ?>
                                    <div class="swiper-slide">
                                        <a href="<?= $partner["link"] ?>"
                                           class="partners-support__item <?= strpos($partner["link"], "facebook") ? "partners-support__item-fb" : '' ?>">
                                            <?= $img; ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>


                            <div class="partners-support__nav d-flex pos-a">

                                <button class="partners-support__prev">
                                    <svg class="icon arrow prev">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>
                                <button class="partners-support__next">
                                    <svg class="icon arrow">
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </button>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </section>
        <section class="section section__action py-70 t-white">

            <div class="wrapper">
                <div class="action container d-flex">
                    <div class="action__descr">
                        <h2 class="fz-52">
                            <?php pll_e('Відбудуємо Україну разом!'); ?>
                        </h2>
                        <div class="fz-24 f-500">

                            <?php pll_e('Вступайте до рядів Добробату або допомагайте по своїм можливостям, тут кожен матиме, що робити!'); ?>
                        </div>
                    </div>
                    <div class="action__descr bdr-12">
                        <h3 class="fz-24 f-600">
                            <?php pll_e('Добровільне формування створено по запрошенню Київської обласної військової
          адміністрації для допомоги підрозділам ДСНС.'); ?></h3>
                        <div class="action__text fz-18">

                            <?php pll_e('Ми організуємо транспорт та проінформуємо про все необхідне. Підписуйтесь на наш канал, щоб бути у
          курсі всіх ініціатив та новин «Добробат».'); ?>
                        </div>
                        <a href="https://t.me/dobrobat_in_ua" class="btn btn_ac " data-telegram>
            <span class="fz-18 t-fc">

              <?php pll_e('ПІДПИСАТИСЬ НА telegram КАНАЛ'); ?>
            </span>


                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    </main>
    <?php if (is_page_template('page-renovation-borodianka.php')): ?>
        <?= get_template_part('template-parts/borodianka-footer'); ?>
    <?php elseif (is_page_template('page-irex.php') || is_page_template('page-zigrii.php')): ?>

    <?php else: ?>
        <?= get_template_part('template-parts/main-footer'); ?>
    <?php endif; ?>

    </div>
    <?php if (!is_page_template('page-zigrii.php') && !is_page_template('page-irex.php') && !is_page_template('page-renovation-borodianka.php')): ?>
        <div class="modal  hide ">

            <div class="modal__wrapper pos-r">
                <div class="modal__body">
                </div>
                <button type="button" class="modal__close pos-a">
                    <svg class="icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
        </div>
    <?php endif; ?>
    <?php if (is_page_template('page-renovation-borodianka.php') || is_page_template('page-irex.php') || is_page_template('page-zigrii.php')): ?>
        <?php echo get_template_part('template-parts/svg-icons-borodianka'); ?>
    <?php else: ?>
        <?php echo get_template_part('template-parts/svg-icons'); ?>
    <?php endif; ?>
<?php else: ?>
    <footer
            class="footer pt-[.8rem] sm:pt-[.86rem] bg-black rounded-t-24 pb-24 sm:pb-40 text-white relative overflow-hidden"
    >
        <div
                class="marquee text-transparent text-row absolute top-[.7rem] sm:top-[.89rem] left-[4rem] lg:left-[5rem] font-semibold text-[.28rem] sm:text-[.4rem] w-full rotate-[6.9deg]"
        >
            відновлення / відбудова / реконструкція / відновлення / відбудова /
            реконструкція /
        </div>
        <div id="contacts" class="container">
            <a href="<?php echo get_home_url(); ?>" class="mb-36 sm:mb-40">
                <svg class="h-[.6rem] sm:h-[.84rem] w-[2.3rem] sm:w-max">
                    <use
                            href="#logo-footer
				"
                    ></use>
                </svg>
            </a>
            <div class="grid lg:grid-cols-12 gap-40 sm:gap-24 mb-40 lg:mb-100">
                <div class="lg:col-start-1 lg:col-end-5">
                    <h4 class="mb-14 font-bold">Відбудуємо Україну разом!</h4>
                    <div class="mb-24">
                        Вступайте до рядів Добробату або допомагайте по своїм можливостям, тут
                        кожен матиме, що робити!
                    </div>
                    <a href="https://t.me/dobrobat_in_ua" target="_blank" class="btn fill_yellow w-[3.26rem] h-[.48rem]">
                        <span>приєднатися +</span>
                    </a>
                </div>
                <div class="lg:col-start-6 lg:col-end-10 grid grid-cols-2 gap-20">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu-footer',
                        'menu_class' => '',
                        'container' => false,
                        'walker' => new Footer_Walker_Nav_Menu()
                    )); ?>
                </div>
                <div
                        class="lg:col-start-10 lg:col-end-13 grid grid-cols-2 gap-24 lg:gap-0 lg:block"
                >
                    <div class="text-l font-semibold lg:mb-24">Контакти</div>
                    <a
                            class="text-l font-semibold lg:mb-14 hover:text-yellow transition-colors duration-300 col-start-2"
                            href="tel:+380 00 000 00 00"
                    >+380000000000</a
                    >
                    <div class="flex gap-16 col-start-2">
                        <a
                                href="#"
                                class="size-40 bg-yellow lg:hover:bg-white transition-colors duration-300 rounded"
                        >
                            <svg class="size-full fill-black">
                                <use href="#whatsapp-icon"></use>
                            </svg>
                        </a>
                        <a href="https://t.me/dobrobat_in_ua" target="_blank">
                            <svg
                                    class="size-40 fill-yellow lg:hover:fill-white transition-colors duration-300"
                            >
                                <use href="#telegram-icon"></use>
                            </svg>
                        </a>
                        <?php if (1 !== 1): ?>
                            <a
                                    href="#"
                                    class="size-40 bg-yellow lg:hover:bg-white transition-colors duration-300 rounded"
                            >
                                <svg class="size-full fill-black">
                                    <use href="#viber-icon"></use>
                                </svg>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse lg:grid lg:grid-cols-12 gap-24">
                <div class="lg:col-start-1 lg:col-end-6 lg:self-end">
                    <div class="flex text-s font-semibold uppercase gap-24 mb-12">
                        <a target="_blank"
                           class="hover:text-yellow transition-colors duration-300 underline underline-offset-8"
                           href="https://www.facebook.com/dobrobat.in.ua"
                        >Facebook</a
                        >
                        <a target="_blank"
                           class="hover:text-yellow transition-colors duration-300 underline underline-offset-8"
                           href="https://t.me/dobrobat_in_ua"
                        >telegram</a
                        >
                    </div>
                    <div class="flex">
                        <a
                                class="text-gray-500 mr-10 hover:text-yellow transition-colors duration-300 underline underline-offset-8"
                                href="/privacy-policy/"
                        >Політика конфіденційності</a
                        > <a target="_blank"
                             class="text-gray-500 hover:text-yellow transition-colors duration-300 underline underline-offset-8"
                             href="/disclaimer/"
                        >Відмова від відповідальності</a
                        >
                    </div>

                </div>
                <div
                        class="lg:col-start-6 lg:col-end-13 border border-white border-solid rounded-24 p-18"
                >
                    <div class="text-l font-semibold mb-16">Партнери:</div>
                    <div class="flex flex-wrap gap-24 lg:gap-50">
                        <a href="https://dsns.gov.ua/" target="_blank"

                           class="h-40 sm:h-50 w-max lg:hover:scale-[1.1] transition-transform duration-300"
                        >
                            <img class="size-full" src="<?= dn_get_img_link('dsns.svg'); ?>"
                                 alt="<?php pll_e('Державна служба України з надзвичайних ситуацій'); ?>"/>
                        </a>
                        <a href="https://prykhystok.gov.ua/" target="_blank"

                           class="h-40 sm:h-50 w-max lg:hover:scale-[1.1] transition-transform duration-300"
                        >
                            <img class="size-full" src="<?= dn_get_img_link('pryhustok.svg'); ?>" alt="ПРИХИСТОК"/>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <?php echo get_template_part('template-parts/new/svg'); ?>
<?php endif; ?>


<?php
wp_footer(); ?>
</body>

</html>