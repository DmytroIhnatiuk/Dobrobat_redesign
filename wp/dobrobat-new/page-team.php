<?php /* Template Name: Команда проекту*/ ?>
<?php
get_header();
?>
    <main>
        <section class="mt-[calc(var(--header-height)+.28rem)] mb-50">
            <div class="container">
                <h1 class="mb-32 lg:mb-40 ">
                    <?php pll_e("<span class='font-bold'>Наша команда –</span> це об'єднання
                    небайдужих людей, які вірять, що дім – це більше, ніж стіни"); ?>
                </h1>
                <h2 class="mb-32 lg:mb-40 font-bold"><?php pll_e('Амбасадори'); ?></h2>
                <div  id="ambasadors" class="swiper bg-bg" data-swiper="ourТeamSlider">
                    <div  class="swiper-wrapper">

                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white rounded-24 h-full flex flex-col p-16 box__shadow">


                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/chern1.jpeg"
                                            alt="<?php pll_e("Олексій Чернишов "); ?>"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e("Олексій Чернишов "); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e("СЕО Групи Нафтогаз"); ?>
                                </p>
                                <a href="https://www.facebook.com/NaftogazGroup"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white h-full flex flex-col rounded-24 p-16 box__shadow">
                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/kreidenko.jpg"
                                            alt="<?php pll_e("Володимир Крейденко"); ?>"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e("Володимир Крейденко"); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e("Народний депутат України,
                  заступник Голови Комітету ВРУ
                  з питань транспорту та інфраструктури"); ?>
                                </p>
                                <a href="https://www.facebook.com/KreydenkoVolodymyr"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white rounded-24 h-full flex flex-col p-16 box__shadow">
                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/savchenko.jpg"
                                            alt="<?php pll_e("Владислав Савченко"); ?>"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e("Владислав Савченко"); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e(" ІТ підприємець, продюсер фільму «Перший код», засновник  фонду «Благодійний фонд Владислава Савченка»"); ?>
                                </p>
                                <a href="https://www.facebook.com/savchenko.vladyslav"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white h-full flex flex-col rounded-24 p-16 box__shadow">
                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/akopan.jpg"
                                            alt="<?php pll_e("Мері Акопян"); ?>"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e("Мері Акопян"); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e("Екс-заступниця Міністра внутрішніх справ"); ?></p>
                                <a href="https://www.facebook.com/mary.akopyan.96"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white h-full flex flex-col rounded-24 p-16 box__shadow">
                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/higginbotham.jpeg"
                                            alt="<?php pll_e("Ентоні Хіггінботам"); ?>"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e("Ентоні Хіггінботам"); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e("член Парламенту Великої Британії"); ?></p>
                                <a href="https://www.facebook.com/antonyforburnley"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                            class="flex items-center justify-between mx-auto z-30 w-max"
                    >
                        <button
                                class="ourТeamSlider-prev rounded-l-30 p-4 pl-8 border-y border-l border-black border-solid border-r-white border-r-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                        <button
                                class="ourТeamSlider-next rounded-r-30 p-4 pr-8 border-y border-r border-black border-solid border-l-white border-l-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black rotate-180">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <h2 class="mb-32 lg:mb-40 font-bold"><?php pll_e('Засновники'); ?></h2>
                <div  id="founders" class="swiper" data-swiper="ourТeamSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white h-full flex flex-col rounded-24 p-16 box__shadow">
                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/smirnov.jpg"
                                            alt="<?php pll_e('Ростислав Смірнов'); ?>"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e('Ростислав Смірнов'); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e('Громадський діяч'); ?>
                                </p>
                                <a href="https://www.facebook.com/rostislavsmirnov"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10">зв’язатись</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide mb-24 sm:mb-32">
                            <div class="bg-white flex h-full flex-col rounded-24 p-16 box__shadow">
                                <div
                                        class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                >
                                    <img
                                            class="object-cover"
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/founders/andrusiv.JPG"
                                            alt="Volodymyr"
                                    />
                                </div>
                                <div class="text-l font-semibold mb-16">
                                    <?php pll_e("Віктор Андрусів"); ?>
                                </div>
                                <p class="text-clamp text-clamp_3 text-s mb-16">
                                    <?php pll_e("Військовослужбовець ЗСУ"); ?>
                                </p>
                                <a href="https://www.facebook.com/victor.andrusiv"
                                   class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                >
                                    <span class="z-10">зв’язатись</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                            class="flex items-center justify-between mx-auto z-30 w-max"
                    >
                        <button
                                class="ourТeamSlider-prev rounded-l-30 p-4 pl-8 border-y border-l border-black border-solid border-r-white border-r-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                        <button
                                class="ourТeamSlider-next rounded-r-30 p-4 pr-8 border-y border-r border-black border-solid border-l-white border-l-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black rotate-180">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <h2 class="mb-32 lg:mb-40 font-bold"><?php pll_e('Медіаамбасадори'); ?></h2>
                <div id="media"  class="swiper" data-swiper="ourТeamSlider">
                    <div class="swiper-wrapper">
                        <?php
                        foreach (get_field('blogers', 948) as $bloger) {
                            $name = get_locale() === 'en' ? $bloger['nameEn'] : $bloger['name'];
                            ?>
                            <div class="swiper-slide mb-24 sm:mb-32">
                                <div class="bg-white h-full flex flex-col rounded-24 p-16 box__shadow">
                                    <div
                                            class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                    >
                                        <?= dn_get_image_attachment($bloger['photo'], 'dobrobat_celebrity', $name, 'object-cover') ?>
                                    </div>
                                    <div class="text-l font-semibold mb-16">
                                        <?= $name; ?>
                                    </div>
                                    <?php if (1 !== 1): ?>
                                        <p class="text-clamp text-clamp_3 text-s mb-16">
                                            Народний депутат України, заступник Голови
                                            Комітету ВРУ з питань транспорту та інфраструктури
                                        </p>
                                    <?php endif; ?>

                                    <a href="<?= $bloger['instagram'] ?>"
                                       class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                    >
                                        <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php }
                        ?>


                    </div>
                    <div
                            class="flex items-center justify-between mx-auto z-30 w-max"
                    >
                        <button
                                class="ourТeamSlider-prev rounded-l-30 p-4 pl-8 border-y border-l border-black border-solid border-r-white border-r-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                        <button
                                class="ourТeamSlider-next rounded-r-30 p-4 pr-8 border-y border-r border-black border-solid border-l-white border-l-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black rotate-180">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <h2 class="mb-32 lg:mb-40 font-bold"><?php pll_e('Команда'); ?></h2>
                <div id="crew"  class="swiper bg-bg" data-swiper="ourТeamSlider">
                    <div class="swiper-wrapper">

                        <?php
                        foreach (get_field('crew', 998) as $teamItem) {
                            $name = get_locale() === 'en' ? $teamItem['nameEn'] : $teamItem['name'];
                            $role = get_locale() === 'en' ? $teamItem['roleEn'] : $teamItem['role'];
                            ?>
                            <div class="swiper-slide mb-24 sm:mb-32">
                                <div class="bg-white h-full flex flex-col rounded-24 p-16 box__shadow">
                                    <div
                                            class="image w-full h-[2.8rem] rounded-16 overflow-hidden mb-16"
                                    >
                                        <?= dn_get_image_attachment($teamItem['photo'], 'dobrobat_team', $name, 'object-cover') ?>
                                    </div>
                                    <div class="text-l font-semibold mb-16">
                                        <?= $name ?>
                                    </div>
                                    <p class="text-clamp text-clamp_3 text-s mb-16">
                                        <?= $role ?>
                                    </p>
                                    <a href="<?= $teamItem['instagram'] ?>"
                                       class="btn mt-auto outline-black hover-black w-[1.1rem] h-[.35rem] text-s"
                                    >
                                        <span class="z-10"><?php pll_e('зв’язатись'); ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php }

                        ?>
                    </div>
                    <div
                            class="flex items-center justify-between mx-auto z-30 w-max"
                    >
                        <button
                                class="ourТeamSlider-prev rounded-l-30 p-4 pl-8 border-y border-l border-black border-solid border-r-white border-r-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                        <button
                                class="ourТeamSlider-next rounded-r-30 p-4 pr-8 border-y border-r border-black border-solid border-l-white border-l-0 lg:bg-white transition-colors duration-300 hover:bg-yellow hover:border-yellow"
                        >
                            <svg class="size-24 sm:size-32 fill-black rotate-180">
                                <use href="#arrow-icon"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
?>