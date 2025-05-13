<?php /* Template Name: Home page work */ ?>
<?php
get_header();
global $IS_NEW;
?>
<?php if ($IS_NEW): ?>
    <main>
        <section
                class="mt-[calc(var(--header-height)+.28rem)] text-white font-semibold mb-24 overflow-hidden"
        >
            <div class="container">
                <div
                        class="bg-black px-12 sm:px-40 pt-[.6rem] sm:pt-[1rem] lg:pt-[.85rem] pb-[2.5rem] sm:pb-[5.43rem] lg:pb-50 rounded-24 overflow-hidden relative marquee-wrapper overflow-hidden will-change-transform"
                >
                    <h1 class="lg:max-w-[5.7rem] mb-16 sm:mb-36">
                        Добробат
                        <span class="font-normal"
                        >- це добровольчий будівельний батальйон</span
                        >
                    </h1>
                    <div class="lg:max-w-[3.1rem] mb-16 sm:mb-32">
                        Долучайся до відбудови нашої країни, зроби внесок у відродження
                        України
                    </div>
                    <a href="https://telegram.me/dobrobat_in_ua_bot?start" target="_blank"
                       class="btn fill_yellow w-[1.9rem] h-[.48rem] mb-40 lg:mb-[.9rem]"
                    >
                        <span class="mr-10"><?php pll_e('приєднатися'); ?></span> <span>+</span>
                    </a>
                    <div
                            class="grid grid-cols-[.78rem_1fr] lg:grid-cols-[1.38rem_1fr] gap-12 max-w-[7.6rem]"
                    >
                        <div
                                class="size-[.78rem] lg:size-[1.38rem] bg-gray rounded-[.16rem] lg:rounded-24 lg:row-start-1 lg:row-end-3 text-yellow text-[.48rem] lg:text-[.84rem] font-bolt flex justify-center items-center"
                        >
                            14
                        </div>
                        <div class="h4 max-w-[2.5rem] lg:max-w-[3.25rem]">
                            Осередків волонтерського руху по Україні
                        </div>
                        <div class="font-medium col-start-1 col-end-3 lg:col-start-2">
                            Львівський, Івано-Франківський, Чернівецький, Київський,
                            Чернігівський, Полтавський, Кіровоградський,
                            Дніпропетровський, Сумський, Харківський, Запорізький,
                            Одеський, Миколаївський, Херсонський
                        </div>
                    </div>
                    <img
                            class="absolute h-[2.18rem] sm:h-[4.43rem] lg:h-[5.43rem] w-max right-10 bottom-14 sm:right-32 sm:bottom-40"
                            src="<?= dn_get_img_link('map.png') ?>"
                            alt="map"
                    />

                    <div
                            class="marquee text-transparent text-row absolute top-50 sm:top-[.65rem] left-[4rem] lg:left-[5rem] font-semibold text-[.28rem] sm:text-[.4rem] w-full rotate-[5.9deg]"
                    >
                        відновлення / відбудова / реконструкція / відновлення /
                    </div>
                </div>
            </div>
        </section>
        <div
                class="grid sm:grid-cols-2 gap-16 md:gap-24 lg:grid-cols-4 container mb-24 sm:mb-[.48rem]"
        >
            <div
                    class="border border-gray border-solid rounded-16 lg:rounded-24 px-32 py-24"
            >
                <div class="h3 font-bold text-yellow lg:text-[.4rem]">
                    > 10 тис.
                </div>
                <div class="text-l font-semibold">
                    сім‘ям допомогли, домівки яких постраждали
                </div>
            </div>
            <div
                    class="border border-gray border-solid rounded-16 lg:rounded-24 px-32 py-24"
            >
                <div class="h3 font-bold text-yellow lg:text-[.4rem]">10 тис.</div>
                <div class="text-l font-semibold">
                    будинках нагально відновили покрівлі
                </div>
            </div>
            <div
                    class="border border-gray border-solid rounded-16 lg:rounded-24 px-32 py-24"
            >
                <div class="h3 font-bold text-yellow lg:text-[.4rem]">20 тис.</div>
                <div class="text-l font-semibold">будинках полагодили вікна</div>
            </div>
            <div
                    class="border border-gray border-solid rounded-16 lg:rounded-24 px-32 py-24"
            >
                <div class="h3 font-bold text-yellow lg:text-[.4rem]">100+.</div>
                <div class="text-l font-semibold">
                    об’єктів соціальної інфраструктури нагально відбудували
                </div>
            </div>
        </div>
        <section id="about" class="mb-24 lg:mb-50">
            <div class="container">
                <div class="rounded-24 overflow-hidden bg-white mb-24">
                    <div class="grid lg:grid-cols-2 gap-x-24 gap-y-20">
                        <div class="image w-full h-[2.8rem] sm:h-[4rem] lg:h-[5.4rem]">
                            <img
                                    class="!object-cover"
                                    src="<?= dn_get_img_link('about.png') ?>"
                                    alt="about_us"
                            />
                        </div>
                        <div
                                class="lg:pt-26 px-14 lg:pl-0 lg:pr-24 pb-16 sm:pb-40 flex flex-col lg:justify-between"
                        >
                            <div
                                    class="border border-black border-solid rounded-30 px-12 py-4 font-medium text-l w-max mb-50"
                            >
                                Про нас
                            </div>
                            <div>
                                <h2 class="font-bold mb-14 lg:mb-4">Добробат - це...</h2>
                                <p class="lg:text-l mb-24">
                                    добровольчий будівельний батальйон, який допомагає
                                    постраждалим у нагальному відновленні житла та об’єктів
                                    соціальної інфраструктури на деокупованих територіях
                                </p>
                                <button class="btn fill_black w-[1.9rem] h-[.48rem] text-s">
                                    <span class="mr-8"> детальніше</span>
                                    <svg class="size-16 fill-white">
                                        <use href="#btn-arrow-icon"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                        class="rounded-24 box__shadow bg-white px-12 sm:px-40 py-24 sm:pt-[.48rem] sm:pr-32"
                >
                    <div class="lg:flex lg:gap-40 w-full mb-24 lg:mb-12">
                        <p class="sm:text-l font-semibold lg:w-1/2 mb-24">
                            «Добробат» зосереджується на первинній відбудові пошкоджених
                            будівель. Першочергове завдання проєкту — «fast recovery»,
                            тобто швидке відновлення: перекриття зруйнованого даху, ремонт
                            побитих вікон, підмурування пошкоджених стін.
                        </p>
                        <p class="lg:w-1/2">
                            Від початку квітня волонтери «Добробату» відбудовують різні
                            об’єкти інфраструктури: житлові будинки — багатоквартирні та
                            приватні, школи, амбулаторії, тощо. Окрім того допомагали
                            розбирати завали зруйнованого житла та прибирати територію
                            об’єктів соцінфраструктури. Сьогодні заявки на долучення до
                            лав добробатівців подали понад 40 тисяч людей. Серед них і
                            мешканці тих областей, де «Добробат» допомагає з відбудовою, і
                            люди з інших регіонів, в тому числі й з тих, які наразі
                            окуповані. До волонтерської діяльності долучаються також
                            іноземці.
                        </p>
                    </div>
                    <div class="lg:flex">
                        <div
                                class="w-full lg:w-[5.2rem] h-[2.24rem] sm:h-[3.63rem] lg:h-[3.63rem] lg:mr-24 mb-50 lg:mb-0 relative"
                        >
                            <div
                                    class="swiper size-full mb-16 lg:mb-0"
                                    data-swiper="aboutUsSlider"
                            >
                                <div class="swiper-wrapper w-full">
                                    <div class="swiper-slide lg:w-[5.2rem] lg:h-[3.63rem]">
                                        <div
                                                class="image size-full rounded-16 sm:rounded-24 overflow-hidden"
                                        >
                                            <img
                                                    class="!object-cover"
                                                    src="<?= dn_get_img_link('ubout_1.png') ?> "
                                                    alt="photo_1"
                                            />
                                        </div>
                                    </div>
                                    <div class="swiper-slide lg:w-[5.2rem] lg:h-[3.63rem]">
                                        <div
                                                class="image size-full rounded-16 sm:rounded-24 overflow-hidden"
                                        >
                                            <img
                                                    class="!object-cover"
                                                    src="<?= dn_get_img_link('ubout_2.png') ?> "
                                                    alt="photo_1"
                                            />
                                        </div>
                                    </div>
                                    <div class="swiper-slide lg:w-[5.2rem] lg:h-[3.63rem]">
                                        <div
                                                class="image size-full rounded-16 sm:rounded-24 overflow-hidden"
                                        >
                                            <img
                                                    class="!object-cover"
                                                    src="<?= dn_get_img_link('about.png') ?> "
                                                    alt="photo_1"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="lg:absolute flex items-center justify-between mx-auto right-16 bottom-16 z-30 w-max"
                            >
                                <button
                                        class="aboutUsSlid-prev rounded-l-30 p-4 pl-8 border-y border-l border-black border-solid border-r-white border-r-0 lg:border-transparent lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                                >
                                    <svg class="size-24 sm:size-32 fill-black">
                                        <use href="#arrow-icon"></use>
                                    </svg>
                                </button>
                                <button
                                        class="aboutUsSlid-next rounded-r-30 p-4 pr-8 border-y border-r border-black border-solid border-l-white border-l-0 lg:border-transparent lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                                >
                                    <svg class="size-24 sm:size-32 fill-black rotate-180">
                                        <use href="#arrow-icon"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="hidden lg:block w-full h-[3.2rem] self-end">
                            <div class="swiper size-full" data-swiper="aboutUsSliderNav">
                                <div class="swiper-wrapper max-w-[3.63rem]">
                                    <div class="swiper-slide h-full">
                                        <div class="image size-full rounded-24 overflow-hidden">
                                            <img
                                                    class="object-cover"
                                                    src="<?= dn_get_img_link('ubout_1.png') ?>"

                                                    alt="photo_nav_1"
                                            />
                                        </div>
                                    </div>
                                    <div class="swiper-slide max-w-[3.63rem]">
                                        <div class="image rounded-24 overflow-hidden size-full">
                                            <img
                                                    class="object-cover"
                                                    src="<?= dn_get_img_link('ubout_2.png') ?>"
                                                    alt="photo_nav_1"
                                            />
                                        </div>
                                    </div>
                                    <div class="swiper-slide max-w-[3.63rem]">
                                        <div class="image rounded-24 overflow-hidden size-full">
                                            <img
                                                    class="object-cover"
                                                    src="<?= dn_get_img_link('about.png') ?>"
                                                    alt="photo_nav_1"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" class="mb-24 lg:mb-50 ">
            <div class="container grid lg:grid-cols-2 gap-20 lg:gap-24">
                <div
                        class="overflow-hidden lg:p-40 px-14 py-24 flex flex-col lg:justify-between rounded-24 bg-black text-white relative"
                >
                    <div
                            class="border border-white border-solid rounded-30 px-12 py-4 font-medium text-l w-max mb-50"
                    >
                        Проєкти
                    </div>
                    <div>
                        <h2 class="font-bold mb-14 lg:mb-4">Наші проєкти</h2>
                        <p class="lg:text-l mb-24">
                            Ми працюємо над тим, щоб повернути людям затишок і безпеку
                            їхніх домівок, відновлюючи зруйноване та створюючи простір для
                            нового життя
                        </p>
                        <button class="btn fill_yellow w-[1.9rem] h-[.48rem] text-s">
                            <span class="mr-8"> Більше проєктів</span>
                            <svg class="size-16 fill-white">
                                <use href="#btn-arrow-icon"></use>
                            </svg>
                        </button>
                        <div
                                class="marquee text-transparent text-row absolute top-[15%] left-0 right-0 font-semibold text-[.28rem] sm:text-[.4rem] w-full rotate-[-4.3deg] overflow-hidden"
                        >
                            відновлення / відбудова / реконструкція / відновлення /
                            відбудова / реконструкція /
                        </div>
                    </div>
                </div>
                <div>
                    <div
                            class="bg-white box__shadow rounded-24 p-16 flex sm:items-center mb-12 last:mb-0"
                    >
                        <div
                                class="size-[.78rem] sm:size-[1.4rem] bg-bg rounded-16 flex-center text-yellow text-[.48rem] sm:text-[.84rem] font-bold mr-12 sm:mr-24 flex-shrink-0"
                        >
                            01
                        </div>
                        <div class="sm:flex h-max">
                            <div class="mr-12 sm:mr-24 mb-12 sm:mb-0">
                                <h4 class="mb-8 sm:mb-12 font-semibold">Відбудова</h4>
                                <p class="text-s sm:text-m font-medium">
                                    Волонтери «Добробату» вже успішно реалізували нагальну
                                    відбудову та розбір завалів у 87-ми населених пунктах
                                    України
                                </p>
                            </div>
                            <button
                                    class="btn outline-black hover-black h-[.38rem] sm:h-[.48rem] w-[1.24rem] text-s flex-shrink-0 self-end"
                            >
                                <span class="z-20">детальніше</span>
                            </button>
                        </div>
                    </div>
                    <div
                            class="bg-white box__shadow rounded-24 p-16 flex sm:items-center mb-12 last:mb-0"
                    >
                        <div
                                class="size-[.78rem] sm:size-[1.4rem] bg-bg rounded-16 flex-center text-yellow text-[.48rem] sm:text-[.84rem] font-bold mr-12 sm:mr-24 flex-shrink-0"
                        >
                            02
                        </div>
                        <div class="sm:flex h-max">
                            <div class="mr-12 sm:mr-24 mb-12 sm:mb-0">
                                <h4 class="mb-8 sm:mb-12 font-semibold">Зігрій</h4>
                                <p class="text-s sm:text-m font-medium">
                                    Ми допомагаємо родинам залишатися зі світлом, теплом та
                                    зв’язком у найскрутніші часи
                                </p>
                            </div>
                            <button
                                    class="btn outline-black hover-black h-[.38rem] sm:h-[.48rem] w-[1.24rem] text-s flex-shrink-0 self-end"
                            >
                                <span class="z-20">детальніше</span>
                            </button>
                        </div>
                    </div>
                    <div
                            class="bg-white box__shadow rounded-24 p-16 flex sm:items-center mb-12 last:mb-0"
                    >
                        <div
                                class="size-[.78rem] sm:size-[1.4rem] bg-bg rounded-16 flex-center text-yellow text-[.48rem] sm:text-[.84rem] font-bold mr-12 sm:mr-24 flex-shrink-0"
                        >
                            03
                        </div>
                        <div class="sm:flex h-max">
                            <div class="mr-12 sm:mr-24 mb-12 sm:mb-0">
                                <h4 class="mb-8 sm:mb-12 font-semibold">Добробат освіта</h4>
                                <p class="text-s sm:text-m font-medium">
                                    Навчаємо волонтерів та студентів ПТУ професійним
                                    будівельним навичкам для якісного виконання робіт
                                </p>
                            </div>
                            <button
                                    class="btn outline-black hover-black h-[.38rem] sm:h-[.48rem] w-[1.24rem] text-s flex-shrink-0 self-end"
                            >
                                <span class="z-20">детальніше</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news" class="mb-24 lg:mb-50">
            <div class="container">
                <div
                        class="bg-white rounded-24 box__shadow px-12 py-16 sm:p-40 mb-16"
                >
                    <div
                            class="border border-black border-solid rounded-30 px-12 py-4 font-medium text-l w-max mb-16"
                    >
                        Новини
                    </div>
                    <div class="lg:flex justify-between items-center">
                        <h2 class="font-bold mb-16 lg:mb-0">Новини проєкту</h2>
                        <button class="btn fill_black w-[1.9rem] h-[.48rem] text-s">
                            <span class="mr-8"> всі новини</span>
                            <svg class="size-16 fill-white">
                                <use href="#btn-arrow-icon"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="swiper" data-swiper="newsSlider">
                        <div class="swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => array('news'),
                                'post_status' => array('publish'),
                                'posts_per_page' => 10,

                                'order' => 'DESC',
                                'orderby' => 'date',
                            );
                            if (get_locale() == 'en') {
                                $args['lang'] = 'en';
                            }
                            $posts = query_posts($args);


                            foreach ($posts as $index => $post) {
                                $title = get_the_title($post->ID);
                                $date = get_the_date('d.m.y', $post->ID);
                                $url = get_permalink($post->ID);
                                ?>
                                <div class="swiper-slide">
                                    <a href="<?= $url; ?>"
                                       class="w-full border border-solid border-black p-16 rounded-24"
                                    >
                                        <div
                                                class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                        >
                                            <?= dn_get_image_attachment(get_field('main-img', $post->ID), 'dobrobat_news_thumb', truncateString($title, 90), '!object-cover') ?>
                                        </div>
                                        <div
                                                class="text-l font-semibold mb-24 text-clamp text-clamp_3"
                                        >
                                            <?php echo truncateString($title, 90); ?>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div class="text-s font-medium">
                                                <?php pll_e('Додано'); ?> <span><?php echo $date ?></span>
                                            </div>
                                            <button
                                                    class="btn !border outline-black hover-black h-[.38rem] w-[1.24rem] text-s flex-shrink-0 self-end"
                                            >
                                                <span class="z-20"><?php pll_e('Переглянути'); ?></span>
                                            </button>
                                        </div>
                                    </a>
                                </div>


                            <?php }
                            wp_reset_query();
                            ?>

                        </div>
                        <div
                                class="flex items-center justify-between mx-auto z-30 w-max mt-16"
                        >
                            <button
                                    class="newsSlid-prev rounded-l-30 p-4 pl-8 border-y border-l border-black border-solid border-r-white border-r-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                            >
                                <svg class="size-24 sm:size-32 fill-black">
                                    <use href="#arrow-icon"></use>
                                </svg>
                            </button>
                            <button
                                    class="newsSlid-next rounded-r-30 p-4 pr-8 border-y border-r border-black border-solid border-l-white border-l-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                            >
                                <svg class="size-24 sm:size-32 fill-black rotate-180">
                                    <use href="#arrow-icon"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-24 overflow-hidden lg:mb-50">
            <div class="container overflow-clip">
                <div
                        class="rounded-16 sm:rounded-24 overflow-hidden bg-black px-12 pt-16 pb-[1rem] sm:pb-[1rem] lg:pb-40 sm:p-40 text-white relative"
                >
                    <div
                            class="marquee text-transparent text-row absolute top-[.7rem] sm:top-[.89rem] left-[4rem] lg:left-[5rem] font-semibold text-[.28rem] sm:text-[.4rem] w-full rotate-[6.9deg]"
                    >
                        відновлення / відбудова / реконструкція / відновлення /

                    </div>
                    <div
                            class="border border-white border-solid rounded-30 px-12 py-4 font-medium text-l w-max mb-16 relative z-30"
                    >
                        Волонтери
                    </div>
                    <div class="lg:flex justify-between items-center sm:mb-[.64rem]">
                        <h2 class="font-bold mb-16 lg:mb-0">Герої Добробату</h2>
                        <a href="/heroes"
                           class="absolute right-1/2 translate-x-1/2 bottom-24 lg:bottom-0 lg:relative btn fill_yellow w-[1.9rem] h-[.48rem] text-s lg:translate-x-0 lg:right-auto"
                        >
                            <span class="mr-8"> всі волонтери</span>
                            <svg class="size-16 fill-white">
                                <use href="#btn-arrow-icon"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="swiper" data-swiper="volunteersSlider">
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
                                    <div
                                            class="rounded-16 sm:rounded-24 p-16 black-opacity_10 sm:flex"
                                    >
                                        <div class="sm:mr-16 mb-16 sm:mb-0">
                                            <div
                                                    class="image w-full h-[2.8rem] sm:size-[2.96rem] rounded-16 sm:rounded-24 overflow-hidden mb-16"
                                            >

                                                <?= dn_get_image_attachment(get_field('heroes_main_img', $heroesItem->ID), 'dobrobat_team', get_field('heroes_name', $heroesItem->ID), 'object-cover') ?>

                                            </div>
                                            <div class="text-l uppercase font-semibold">
                                                <?= get_field('heroes_name', $heroesItem->ID) ?>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between">
                                            <a href="<?= get_permalink($heroesItem->ID) ?>">
                                                <div
                                                        class="border border-white border-solid rounded-30 px-12 py-4 font-medium w-max mb-16 relative z-30 hover:border-yellow hover:text-yellow transition-colors duration-300"
                                                >
                                                    <?php pll_e('#героїдобробату'); ?>
                                                </div>
                                            </a>
                                            <div>
                                                <div class="font-medium mb-16 text-clamp text-clamp_8">
                                                    <?= trim_text_to(get_field('heroes_text', $heroesItem->ID), 200); ?>
                                                </div>
                                                <a href="<?= get_permalink($heroesItem->ID) ?>"
                                                   class="btn outline-white w-full h-[.48rem] hover-yellow px-16 !justify-between"
                                                >
                                                    <span class="mr-8 z-10"><?php pll_e('детальніше'); ?></span>
                                                    <svg class="size-16 fill-white z-10">
                                                        <use href="#btn-arrow-icon"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                            wp_reset_query();
                            ?>


                        </div>
                        <div
                                class="flex items-center justify-between mx-auto z-30 w-max lg:ml-auto lg:mr-0 mt-24 sm:mt-36"
                        >
                            <button
                                    class="newsSlid-prev rounded-l-30 p-4 pl-8 border-y border-l border-white border-solid border-r-white border-r-0 transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                            >
                                <svg class="size-24 sm:size-32 fill-white">
                                    <use href="#arrow-icon"></use>
                                </svg>
                            </button>
                            <button
                                    class="newsSlid-next rounded-r-30 p-4 pr-8 border-y border-r border-white border-solid border-l-white border-l-0 transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                            >
                                <svg class="size-24 sm:size-32 fill-white rotate-180">
                                    <use href="#arrow-icon"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= get_template_part('template-parts/new/partners'); ?>
        <?= get_template_part('template-parts/new/team'); ?>
    </main>
<?php else: ?>
    <main class="main__page">
    <section class="section section__main-screen pos-r py-40">
        <div class="main-screen container">
            <div class="main-screen__content t-center ">
                <h1 class="fz-54 f-600">
                    <?php pll_e('Добробат - це добровольчий будівельний батальйон.'); ?>
                </h1>
                <div class="main-screen__text fz-24">
                    <?php pll_e('Долучайся до відбудови нашої країни, зроби внесок у відродження України'); ?>

                </div>
                <div class="main-screen__btns d-flex">

                    <a href="https://telegram.me/dobrobat_in_ua_bot?start" target="blank" class="btn btn_ac">
                        <?php pll_e('приєднатися ДО ДОБРОБАТУ'); ?>
                    </a>
                    <a href="/objects/" class="btn">
                        <?php pll_e("Зруйновані об'єкти"); ?>
                    </a>

                </div>
            </div>


        </div>
    </section>

    <div class="main-screen__video pos-r ">
        <div class="container">
            <div class="wrapper">
                <div class="video">

                    <iframe id="player" frameborder="0" allowfullscreen="1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            title="<?php pll_e('Про проєкт - Добробат'); ?>" width="640" height="360"
                            src="https://www.youtube.com/embed/9r2aeFew6aE?autoplay=1&amp;loop&amp;=1&amp;controls=2&amp;color=white&amp;modestbranding=1&amp;mute=1&amp;rel=0&amp;showinfo=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A3006&amp;widgetid=1"
                    ></iframe>

                    <!--                    <iframe src="https://player.vimeo.com/video/710012411?h=81938e745f" frameborder="0"-->
                    <!--                            webkitallowfullscreen mozallowfullscreen allowfullscreen-->
                    <!--                            title="   -->
                    <?php //pll_e('Про проєкт - Добробат'); ?><!--"></iframe>-->


                </div>
            </div>

        </div>

    </div>
    <section id="about" class="section section__about section__container py-40">
        <div class="about">
            <div class="about__content d-flex">
                <h2 class="fz-44">
                    <?php pll_e('Про проєкт «Добробат»'); ?>
                </h2>
                <div class="about__text fz-24">
                    <?php the_field('text_1'); ?>
                </div>
                <div class="about__text fz-18">
                    <?php the_field('text_2'); ?>
                </div>
                <div class="swiper-about__nav d-flex">
                    <div class="controls d-flex">
                        <button class="swiper-about__prev">
                            <svg class="icon arrow prev">
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </button>
                        <button class="swiper-about__next">
                            <svg class="icon arrow">
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="counter ">
                        <span class="counter__current f-700">1</span>
                        <span class="counter__total"></span>


                    </div>


                </div>


            </div>
            <div class="about__slider">


                <div class="swiper swiper-about">
                    <?php if (have_rows('gallery')): ?>
                        <div class="swiper-wrapper">
                            <?php while (have_rows('gallery')): the_row();
                                $photo = get_sub_field('photo');
                                ?>
                                <div class="swiper-slide">
                                    <?= wp_get_attachment_image($photo, 'dobrobat_600', false, array('width' => 'dobrobat_600', 'height' => 'dobrobat_600'));
                                    ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>


            </div>
        </div>
        <div class="about__info">
            <div class="text">
                <div class="fz-18 ">
                    <?php the_field('text_3'); ?>
                </div>
                <?php
                $isEn = get_locale(); ?>
                <a href="<?php if ($isEn !== 'en') : ?>https://www.dobrobat.in.ua/dogovir/ <?php else : ?> https://www.dobrobat.in.ua/en/agreement/ <?php endif; ?>"
                   class="btn btn_ac"> <?php pll_e("Договір про провадження волонтерської діяльності"); ?></a>

            </div>
            <?php if (have_rows('statistics')): ?>
                <div class="about__statistics">
                    <?php while (have_rows('statistics')): the_row();
                        $number = get_sub_field('number');
                        $description = get_sub_field('description');
                        ?>
                        <div class="about__item d-flex  f-600 --align-center">
                            <div class="title fz-36 t-ac">
                                <?php echo $number; ?>
                            </div>
                            <div class="fz-18">
                                <?php echo $description; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="section section__centers py-40 centers">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><h2 class="fz-52"> <?php pll_e('Осередки відновлення'); ?></h2></div>
                <div class="col-md-6 fz-24">
                    <?php pll_e('Волонтери «Добробату» вже успішно реалізували нагальну відбудову та
                    розбір завалів у 87-ми населених пунктах України'); ?>
                </div>
            </div>
            <div class="centers__img image">
                <img src="<?php the_field('map'); ?>" alt="<?php pll_e('Осередки відновлення'); ?>">
            </div>

        </div>
    </section>


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

                        'order' => 'DESC',
                        'orderby' => 'date',
                        // 'cat' => 1,
                    );
                    if (get_locale() == 'en') {
                        $args['lang'] = 'en';
                    }
                    $posts = query_posts($args);


                    foreach ($posts as $index => $post) {
                        $title = get_the_title($post->ID);
                        $date = get_the_date('d.m.y', $post->ID);
                        $mainImg = wp_get_attachment_image(get_field('main-img', $post->ID), 'dobrobat_news_thumb', false, array('width' => 'dobrobat_news_thumb', 'height' => 'dobrobat_news_thumb'));
                        $url = get_permalink($post->ID);
                        ?>

                        <div class="swiper-slide">
                            <a href="<?php echo $url; ?>" class="main-screen__news-item d-flex --dir-col">
                                <div class="image">
                                    <?php echo $mainImg ?>
                                </div>
                                <div class="text fz-18 f-600">
                                    <?php echo truncateString($title, 90); ?>
                                </div>
                                <div class="main-screen__news-item__footer d-flex --just-between">
                                    <span class="fz-16"><?= pll_e('Додано'); ?><?php echo $date ?></span><span
                                            class="t-upper fz-14 f-600"><?= pll_e('Переглянути'); ?></span>
                                </div>
                            </a>
                        </div>


                    <?php }


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
            </div>
        </div>
    </section>
    <?php if (get_locale() !== 'en'): ?>
        <section class="section section__history py-40">
            <div class="container">
                <h2 class="fz-52 ">Історія Добробату</h2>
                <div class=" swiper" data-swiper="history">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => array('history'),
                            'post_status' => array('publish'),
                            'posts_per_page' => 10,

                            'order' => 'DESC',
                            'orderby' => 'date',
                            // 'cat' => 1,
                        );
                        $posts = query_posts($args);


                        foreach ($posts as $index => $post) {
                            $title = get_the_title($post->ID);

                            $url = get_permalink($post->ID);
                            ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $url; ?>" class="history-item  d-flex --dir-col bdr-10">
                                    <span class="number">
                                        0<?= $index + 1; ?>
                                    </span>
                                    <span class="page-template__label  bg-ac  bdr-10 mb-2">
                                        #історія_добробату
                                     </span>
                                    <div class="title ">
                                        <?= $title; ?>
                                    </div>
                                    <div class="">
                                        <?= get_field('history_desription', $post->ID); ?>
                                    </div>

                                    <div class="history-item__footer d-flex --just-between">
                                        <span class="t-upper fz-14 f-600">ЧИТАТИ БІЛЬШЕ</span>
                                    </div>
                                </a>
                            </div>


                        <?php }


                        ?>


                    </div>
                    <div class="swiper-history__nav d-flex --just-end">
                        <div class="controls d-flex">
                            <button class="swiper-history__prev">
                                <svg class="icon arrow prev">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="swiper-history__next">
                                <svg class="icon arrow">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (1 !== 1): ?>
        <!--    <section class="section section__restorations-academy py-40">-->
        <!--        <div class="container">-->
        <!--            <div class="academy__section d-flex bdr-12">-->
        <!--                <h2>--><?php //pll_e('Збираємо на відновлення Хортицької національної навчально-реабілітаційної
//                    академії') ?>
        <!--                </h2>-->
        <!--                <div>-->
        <!--                    <div class="fz-24 mb-2">-->
        <!--                        --><?php //pll_e('Друзі, «Добробат» відкриває збір коштів на відновлення КЗВО «Хортицька національна
//                        навчально-реабілітаційна академія», де навчалося 337 дітей та 1113 студентів.') ?>
        <!---->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="fz-24 mb-3">-->
        <!--                        --><?php //pll_e('Для відновлення будівлі та її приміщень необхідно зібрати') ?><!--</div>-->
        <!--                    <div class="fz-54 f-600 mb-3">5 000 000.00 ₴</div>-->
        <!---->
        <!--                    --><?php //$isEn = get_locale();
//                    $link = 'https://www.dobrobat.in.ua/reconstruction-academy';
//                    if ($isEn == 'en') {
//                        $link = "https://www.dobrobat.in.ua/en/reconstruction-academy-en/";
//                    } ?>
        <!--                    <a href="--><? //= $link; ?><!--" class="btn btn_black "-->
        <!--                    ><span class="fz-24">-->
        <!--                        --><?php //pll_e('ДІЗНАТИСЯ  БІЛЬШЕ') ?><!--</span></a>-->
        <!--                </div>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->
    <?php endif; ?>

    <?php
    if (pll_current_language() == 'ua') : ?>

        <!--    <section class="section section__aid py-40">-->
        <!--        <div class="container">-->
        <!--            <div class="aid  d-flex">-->
        <!--                <h2 class="fz-52">-->
        <!--                    --><?php //pll_e('Стрічка взаємодопомоги'); ?>
        <!---->
        <!--                </h2>-->
        <!--                <div class="aid__descr">-->
        <!--                    <p class="fz-18">-->
        <!--                        --><?php //pll_e('Щоб прискорити роботу відбудови, ми створили живу стрічку взаємодопомоги. Де ті хто постраждав, можуть
//            вказати інформацію про пошкодження, та що саме треба полагодити.'); ?><!--</p>-->
        <!--                    <p class="fz-18">--><?php //pll_e('А ті хто може швидко допомогти, самоорганізуватись, зв’язатись з користувачем, якому
//            потрібна допомога, та прибути на відновлювальні роботи.'); ?><!--</p>-->
        <!--                    <div class="aid__btns d-flex">-->
        <!--                        <a href="#form" class="btn btn_ac scrolTo"><span class="fz-18" data-askHelp>-->
        <!--                --><?php //pll_e('РОЗМІСТИТИ ОГОЛОШЕННЯ'); ?>
        <!--              </span></a>-->
        <!--                        <a href="/advertisement/" class="btn "><span class="fz-18">-->
        <!--                --><?php //pll_e('УСІ ОГОЛОШЕННЯ'); ?>
        <!---->
        <!--              </span></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->
        <section class="section section__aid py-40">
            <div class="container">
                <div class="aid  d-flex">
                    <h2 class="fz-52">
                        Співпраця з нашими партнерами
                    </h2>
                    <div class="aid__descr">
                        <p class="fz-24">
                            «Добробат» спільно з компанією Hilti Україна реалізовує ініціативу підтримки бригад та компаній,
                            які займаються відбудовою зруйнованих будівель</p>
                        <div class="assistance__logos d-flex">
                            <a href="<?php echo get_home_url(); ?>">
                                <svg class="icon">
                                    <use xlink:href="#logo"></use>
                                </svg>
                            </a>
                            <a href="https://www.hilti.ua/" target="_blank">
                                <div class="image">
                                    <img src="https://www.hilti.ua/static/ui/contents/R2023-44/assets/images/hilti-logo.svg"

                                         alt="Hilti">
                                </div>

                            </a>
                        </div>
                        <div class="aid__btns d-flex">

                            <a href="/dobrobat-spilno-z-hilti/" class="btn btn_ac "><span class="fz-18">
            ДІЗНАТИСЯ  БІЛЬШЕ

              </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="section section__info  py-70 t-white">
        <div class="container">
            <div class="info d-flex">

                <div class="info__descr d-flex">
                    <h2 class="fz-52"><?php pll_e('Суть проекту'); ?><span
                                class="d-block"><?php pll_e('«Добробат»'); ?></span></h2>
                    <ul class="info__list">
                        <li class="info__item d-flex ">
                            <div class="info__number fz-52">01</div>
                            <div class="info__text fz-24"> <?php pll_e('Ви заповнюєте форму і обираєте напрямок у якому можете допомогти у відбудові
                та ремонті будівель.'); ?>
                            </div>

                        </li>
                        <li class="info__item d-flex">
                            <div class="info__number fz-52">02</div>
                            <div class="info__text fz-24"> <?php pll_e('Ми формуємо базу для місцевих батальйонів, домовляємося і організовуємо усі
                процеси.'); ?>
                            </div>

                        </li>

                        <li class="info__item d-flex ">
                            <div class="info__number fz-52">03</div>
                            <div class="info__text fz-24"><?php pll_e('Зв’язуємося з Вами та узгоджуємо подальші дії.'); ?></div>
                        </li>
                        <li class="info__item d-flex ">
                            <div class="info__number fz-52">04</div>
                            <div class="info__text fz-24"><?php pll_e('Запускаємо усі роботи. '); ?></div>
                        </li>
                        <li class="info__item d-flex ">

                            <div class="info__number fz-52">05</div>
                            <div class="info__text fz-24"><?php pll_e('Насолоджуємося нашою спільною співпрацею та результатом.'); ?></div>
                            <!--                </div>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="donate" class="section section__donate pos-r py-70">
        <div class="container">
            <div class="inform d-flex">
                <div class="inform__title">
                    <h2 class="fz-52 f-600">
                        <?php pll_e("Принцип вибору об'єктів для нагальної відбудови силами волонтерів «Добробат»"); ?>

                    </h2>
                </div>
                <div class="inform__text">

                    <p class="fz-18">
                        <?php pll_e('«Добробат» зосереджується на первинній відбудові пошкодженого житла. Основне завдання —
                        «fast recovery», тобто швидке відновлення: перекриття зруйнованого даху, ремонт побитих
                        вікон, підмурування пошкоджених стін. «Добробат» не відбудовує повністю зруйновані будинки.'); ?>


                    </p>
                    <p class="fz-24">
                        <?php pll_e('Для нас головне — допомогти якомога більшій кількості людей, аби вони зустріли холодну пору
                        в теплі.'); ?>

                    </p>


                </div>


            </div>
            <div class="donate d-flex">
                <div class="wrapper t-center">
                    <h2 class=" fz-54">
                        <?php pll_e('Як я можу допомогти?'); ?>

                    </h2>
                    <div class="donate__descr fz-24">
                        <?php pll_e('Зроби свій благодійний внесок та приєднуйся до команди, що творить добро.'); ?>

                    </div>
                    <div class="donate__descr fz-24 f-600 pos-r" style='z-index:10;'>
                        <?php pll_e('Підтримай відбудову України!'); ?> <br>
                        <b>5582 5923 6484 8078</b>

                    </div>
                    <div class="donate__btns d-flex">

                        <?php $isEn = get_locale();
                        if ($isEn !== 'en') : ?>
                            <a href="https://secure.wayforpay.com/button/bb815d38e4772" target="blank"
                               class="btn btn_black" data-label='uah'>
                                <span> UAH</span>
                            </a>
                            <a href="https://secure.wayforpay.com/button/bc6b8fc72269f" target="blank"
                               class="btn btn_black" data-label='usd'>
                                <span>USD</span>
                            </a>
                            <a href="https://secure.wayforpay.com/button/b6186de459c6b" target="blank"
                               class="btn btn_black" data-label='eur'>
                                <span>EUR</span>
                            </a>
                        <?php else : ?>
                            <a href="https://secure.wayforpay.com/button/b0c6e9bc9bc5f" target="blank"

                               class="btn btn_black" data-label='usd'>
                                <span>USD</span>
                            </a> <a href="https://secure.wayforpay.com/button/b1d6160253af3" target="blank"
                                    class="btn btn_black" data-label='eur'>
                                <span>EUR</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php echo get_template_part('template-parts/legioners'); ?>
    <?php echo get_template_part('template-parts/more-heroes'); ?>
    <?php
    if (pll_current_language() == 'ua') : ?>
        <section class="section section__irex  py-70">
            <div class="container pos-r">
                <div class="grid">
                    <h2 class="fz-52">
                        Добробат допомагає з розбиранням завалів українських домівок
                    </h2>
                    <div class="fz-18 f-500">
                        Цей проєкт став можливим завдяки програмі "Український фонд швидкого реагування", яку втілює
                        IREX за підтримки Державного департаменту США. Вміст є виключною відповідальністю громадської
                        організації «Добробат - добровольчий будівельний батальйон» і не обовʼязково відображає погляди
                        IREX або Державного департаменту США.
                    </div>
                </div>
                <div class="d-flex --align-center --wrap">
                    <div class="logos d-flex --align-center">

                        <div class="image ">
                            <img src="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/usa_fllag.webp?lossy=1&amp;strip=1&amp;webp=1"
                                 alt="" class="object-contain" loading="lazy">

                        </div>
                        <div class=" image ">
                            <img src="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_department.webp?lossy=1&amp;strip=1&amp;webp=1"
                                 alt="" class="object-contain" loading="lazy">


                        </div>
                        <a href="https://irex.org/" class=" image " target="_blank">
                            <img src="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_irex.webp?lossy=1&amp;strip=1&amp;webp=1"
                                 alt="IREX" class="object-contain" loading="lazy">


                        </a>
                        <a href="https://www.irex.org/project/ukraine-rapid-response-fund/" class=" image " target="_blank">
                            <img src="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_urrf.webp?lossy=1&amp;strip=1&amp;webp=1"
                                 alt="IREX" class="object-contain"
                                 srcset="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_urrf.webp?lossy=1&amp;strip=1&amp;webp=1 494w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_urrf.webp?size=128x52&amp;lossy=1&amp;strip=1&amp;webp=1 128w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_urrf.webp?size=256x104&amp;lossy=1&amp;strip=1&amp;webp=1 256w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img//irex/logo_urrf.webp?size=384x155&amp;lossy=1&amp;strip=1&amp;webp=1 384w"
                                 sizes="(max-width: 494px) 100vw, 494px" loading="lazy">


                        </a>

                        <a href="https://www.dobrobat.in.ua" class="image">
                            <svg class="icon">
                                <use xlink:href="#logo"></use>
                            </svg>
                        </a>

                    </div>
                    <a href="/irex/" type="submit" class="btn btn_ac">
                        ДІЗНАТИСЯ БІЛЬШЕ
                    </a>
                </div>

            </div>

        </section>
        <section class="section section__borodianka  py-70">
            <div class="container pos-r">
                <div class="grid">
                    <div class="">
                        <h2 class="fz-52 mb-2">
                            Проєкт «Відродження» Бородянки
                        </h2>
                        <div class="fz-24 f-500 mb-3">
                            Добробат разом із партнерами створює сучасний зелений простір, що буде символізувати
                            «Відродження» міста та жителів Бородянки
                        </div>
                        <a href="/renovation-borodianka/" type="submit" class="btn btn_ac">
                            ДІЗНАТИСЯ БІЛЬШЕ
                        </a>
                    </div>
                    <div class="image">
                        <img src="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?lossy=1&amp;strip=1&amp;webp=1"
                             alt="6"
                             srcset="https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?lossy=1&amp;strip=1&amp;webp=1 1920w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?size=128x72&amp;lossy=1&amp;strip=1&amp;webp=1 128w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?size=256x144&amp;lossy=1&amp;strip=1&amp;webp=1 256w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?size=384x216&amp;lossy=1&amp;strip=1&amp;webp=1 384w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?size=512x288&amp;lossy=1&amp;strip=1&amp;webp=1 512w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?size=640x360&amp;lossy=1&amp;strip=1&amp;webp=1 640w,https://b2903718.smushcdn.com/2903718/wp-content/themes/dobrobat-1/assets/borodianka/img/e-6.webp?size=1280x720&amp;lossy=1&amp;strip=1&amp;webp=1 1280w"
                             sizes="(max-width: 1920px) 100vw, 1920px" loading="lazy">
                    </div>
                </div>

            </div>

        </section>
        <section id="form" class="section section__form  py-70">
            <div class="container">
                <div class="form-section d-flex">
                    <h2 class="fz-54">
                        <?php pll_e('Зараз, кожному потрібна допомога як ніколи!'); ?>

                    </h2>
                    <div class="form-section__wrapper bdr-12">
                        <h3 class="fz-24 f-700"> <?php pll_e('Форма для допомоги'); ?></h3>
                        <h4 class="t-secondary"> <?php pll_e('допоможіть потребуючим матеріалами або запросіть допомогу'); ?></h4>
                        <div class="form-section__nav d-flex">
                            <button class="active" data-target="#materials">
                                <span></span>
                                <span class="fz-18 t-fc"> <?php pll_e('Можу надати матеріали'); ?></span>

                            </button>
                            <button data-target="#help">
                                <span></span>
                                <span class="fz-18 t-fc"> <?php pll_e('Мені потрібна допомога'); ?></span>

                            </button>

                        </div>
                        <div data-content class="active form-section__item" id="materials">
                            <form class="form form-materials" data-title="Надати матеріали">
                                <div class="form__item">
                                    <label class="fz-14">
                                        Прізвище та ім'я
                                    </label>
                                    <input class="f-500 fz-18" type="text" name="name"
                                           placeholder="<?php pll_e("Прізвище та ім'я"); ?>">
                                    <div class="form__message fz-16"></div>

                                </div>
                                <div class="d-flex form__item-wrapper">

                                    <div class="form__item">
                                        <label class="fz-14">
                                            <?php pll_e("Номер телефону"); ?>
                                        </label>
                                        <input class="f-500 fz-18" type="text" name="tel" placeholder="+380 ">
                                        <div class="form__message fz-16"></div>

                                    </div>
                                    <div class="form__item">
                                        <label class="fz-14">
                                            Email
                                        </label>
                                        <input class="f-500 fz-18" type="text" name="email"
                                               placeholder=" <?php pll_e("Введіть свій Email"); ?>">
                                        <div class="form__message fz-16"></div>
                                    </div>
                                </div>


                                <div class="form__item">
                                    <label class="fz-14">
                                        <?php pll_e("Місцезнаходження"); ?>
                                    </label>
                                    <div class="dropdown pos-r region-help" data-region='dropdown'>
                                        <div class="dropdown__selected  " data-region='region'>
                                            <?php pll_e("Оберіть область"); ?>
                                        </div>
                                        <ul class="dropdown__menu pos-a">
                                        </ul>
                                        <button class="dropdown__btn  pos-a ">

                                        </button>

                                    </div>

                                </div>
                                <div class="form__item">
                                    <label class="fz-14">
                                        <?php pll_e("Місто"); ?>
                                    </label>
                                    <input type="text" name="city" value="" placeholder="<?php pll_e("Місто"); ?>">
                                    <div class="form__message fz-16"></div>
                                </div>
                                <div class="form__item">
                                    <label class="fz-14">
                                        <?php pll_e("Напишіть, що саме ви можете надати"); ?>
                                    </label>
                                    <textarea name="your-info" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                              aria-invalid="false"
                                              placeholder=" <?php pll_e("Наприклад: можу надати бетон, дошку, вікна, трактор, обладнання"); ?>"></textarea>
                                    <div class="form__message fz-16"></div>
                                </div>

                                <div class="form__item form__checkbox">

                                    <label class="fz-14 d-flex">
                                        <input type="checkbox" name="policy" value="Даю згоду на обробку персональних даних"
                                               checked="checked">
                                        <span class="check">
                      <svg class="icon">
                        <use xlink:href="#check"></use>
                      </svg>
                    </span>

                                        <span> <?php pll_e("Даю згоду на обробку"); ?> <a
                                                    href="#"><?php pll_e("персональних даних "); ?>
                      </a></span>
                                    </label>


                                </div>


                                <button type="submit" class="btn btn_ac">
                                    <?php pll_e("Відправити заяву"); ?>

                                </button>
                            </form>
                        </div>
                        <div data-content class="form-section__item" id="help">
                            <form class="form form-help" data-title="Запросити допомогу">
                                <div class="form__item">
                                    <label class="fz-14">
                                        Прізвище та ім'я
                                    </label>
                                    <input class="f-500 fz-18" type="text" name="name" placeholder="Прізвище та ім'я">
                                    <div class="form__message fz-16"></div>

                                </div>
                                <div class="d-flex form__item-wrapper">

                                    <div class="form__item">
                                        <label class="fz-14">
                                            <?php pll_e("Номер телефону"); ?>
                                        </label>
                                        <input class="f-500 fz-18" type="text" name="tel" placeholder="+380 ">
                                        <div class="form__message fz-16"></div>

                                    </div>
                                    <div class="form__item">
                                        <label class="fz-14">
                                            Email
                                        </label>
                                        <input class="f-500 fz-18" type="text" name="email"
                                               placeholder="<?php pll_e("Введіть свій Email"); ?>">
                                        <div class="form__message fz-16"></div>
                                    </div>
                                </div>


                                <div class="form__item">
                                    <label class="fz-14">
                                        <?php pll_e("Місцезнаходження"); ?>
                                    </label>
                                    <div class="dropdown pos-r region-materials" data-region='dropdown'>
                                        <div class="dropdown__selected  " data-region='region'>
                                            <?php pll_e("Оберіть область"); ?>
                                        </div>
                                        <ul class="dropdown__menu pos-a">
                                        </ul>
                                        <button class="dropdown__btn  pos-a ">

                                        </button>

                                    </div>

                                </div>
                                <div class="form__item">
                                    <label class="fz-14">
                                        <?php pll_e("Місто"); ?>
                                    </label>
                                    <input type="text" name="city" placeholder="<?php pll_e("Місто"); ?>">
                                    <div class="form__message fz-16"></div>
                                </div>
                                <div class="form__item">
                                    <label class="fz-16 f-600">
                                        Види ремонтних робіт
                                    </label>
                                    <div class="types wrapper d-flex">

                                    </div>

                                </div>
                                <div class="form__item">
                                    <label class="fz-16 f-600">
                                        Хто потрібен
                                    </label>
                                    <div class="profession wrapper d-flex">

                                    </div>

                                </div>
                                <div class="form__item">
                                    <label class="fz-16 f-600">
                                        Необхідні матеріали
                                    </label>
                                    <div class="materials wrapper d-flex">

                                    </div>

                                </div>
                                <div class="form__upload pos-r">
                                    <div class="form__upload-input d-flex" data-upload>
                                        <div class="pic_upload d-flex">
                                            <svg class="icon">
                                                <use xlink:href="#upload"></use>
                                            </svg>
                                        </div>
                                        <input type="file" id="file" accept=".png,.jpg,.jpeg" multiple="true">
                                        <div class="descr">Додати фото</div>

                                    </div>
                                    <div class="form__upload-container" data-container>

                                    </div>

                                    <div class="descr t-secondary">

                                        Завантажуйте не більше 5 файлів. Макс. розмір файлу не більше 10 мб.
                                    </div>
                                    <div class="error pos-a">Максимальна кількість - 5 файлів</div>
                                </div>
                                <div class="form__item">
                                    <label class="fz-14">
                                        Напишіть, які роботи потрібні
                                    </label>
                                    <textarea name="your-info" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                              aria-invalid="false"
                                              placeholder="Наприклад: треба вставити вікно, полагодити дах у приватному будинку у наслiдок артобстрілу..."></textarea>
                                    <div class="form__message fz-16"></div>
                                </div>

                                <div class="form__attention">


                                    <h2 class="fz-16 f-600">Застереження</h2>
                                    <div class="descr fz-14">
                                        <p>
                                            Застерігаємо всіх, хто залишає запит про допомогу на дошці оголошень щодо
                                            відновлення житла чи
                                            інших нежитлових об’єктів. Нагадуємо, на запит може відгукнутися будь-хто з тих,
                                            хто його
                                            бачить.<span data-attention="show">.. <u>Читати повністю</u></span>
                                        </p>
                                        <p>Варто пам’ятати, добровольчий будівельний батальйон «Добробат» — волонтерська
                                            організація. Тож,
                                            якщо залишивши запит про допомогу відгукуються ті, хто вимагає грошей за свою
                                            роботу або
                                            говорить, що ви маєте особисто їм виділити кошти на будматеріали, інвентар і
                                            подібне — будьте
                                            обережні.</p>
                                        <p>За всі взаємодії поза участю «Добробату» ми не несемо відповідальності. Саме
                                            такою є дошка
                                            оголошень, коли на ваш запит про допомогу відгукуються приватні особи.<span
                                                    data-attention><u>Приховати</u></span></p>
                                    </div>

                                </div>
                                <div class="form__item form__checkbox">

                                    <label class="fz-14 d-flex">
                                        <input type="checkbox" name="policy" value="Даю згоду на обробку персональних даних"
                                               checked="checked">
                                        <span class="check">
                      <svg class="icon">
                        <use xlink:href="#check"></use>
                      </svg>
                    </span>

                                        <span>Даю згоду на обробку <a href="#">персональних даних
                      </a></span>
                                    </label>


                                </div>
                                <button type="submit" class="btn btn_ac">
                                    НАДІСЛАТИ
                                </button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </section>

    <?php endif; ?>




<?php endif; ?>

<?php
get_footer();
?>