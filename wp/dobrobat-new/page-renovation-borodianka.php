<?php /* Template Name: Borodianka Page*/ ?>
<?php
get_header();
$en = get_locale() === 'en';

?>

    <main class="flex-grow">


    <section class="h-[4.6rem] md:h-0 md:pb-[56.25%] lg:pb-0 lg:h-svh relative pb-32">
        <h1 class="hidden"> <?= the_title(); ?></h1>
        <picture class="absolute">
            <source srcset="<?= get_img_link($en ? 'hero_en' : 'hero') ?>.webp" media="(min-width: 640px)"/>
            <img src="<?= get_img_link($en ? 'hero_mob_en' : 'hero_mob') ?>.webp" alt='<?= the_title(); ?>'/>
        </picture>
    </section>


    <section class="py-32 lg:py-[.7rem]">
        <div class="container">
            <h3 class="font-semibold mb-46 lg:max-w-[8.2rem]">
                <?php pll_e('Навесні 2022 року після деокупації Бородянки ці фото облетіли весь світ'); ?>
            </h3>
            <div class="swiper -mr-[.15rem]" data-swiper="about">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image h-0 pb-[56.25%] lg:pb-0 lg:h-[2.8rem] rounded-10 lg:rounded-20 overflow-hidden mb-12 lg:mb-24">
                            <img src="<?= get_img_link('about-1') ?>.webp" alt="">
                        </div>
                        <div class="text-s md:text-m">
                            <?php pll_e('Кобзар, символ опору українців проти царизму, споглядає на зруйнований будинок і багато
                            знищених життів у ньому'); ?>

                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="image h-[49.5vh] max-h-[3.5rem] md:max-h-full rounded-10 overflow-hidden mb-12">
                            <img src="<?= get_img_link('about-2') ?>.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image h-0 pb-[56.25%] lg:pb-0 lg:h-[2.8rem] rounded-10 lg:rounded-20 overflow-hidden mb-12 lg:mb-24">
                            <img src="<?= get_img_link('about-3') ?>.webp" alt="">
                        </div>
                        <div class="text-s  md:text-m">
                            <?php pll_e('Півник на шафі став символом стійкості кожного українця'); ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation flex border border-solid border-black py-16 rounded-40 w-max mt-40 lg:hidden">
                    <button class="mx-16 prev">
                        <svg class="w-16 h-16 fill-main">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </button>
                    <button class="mx-16 next">
                        <svg class="w-16 h-16 -scale-100">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section>
    <section id="details" class="py-32 lg:py-[.7rem]">
        <div class="container grid md:grid-cols-2">
            <h2 class="uppercase mb-24"><?php pll_e('Настав час для <span class="text-main">відродження</span>'); ?></h2>
            <div class="mb-48">
                <p class="mb-24">

                    <?php pll_e('«Відродження» - це створення нового зеленого простору на центральній площі міста, щоб вчитися у
                    природи відновлюватися. Це буде привітне та комфортне середовище, що передбачає близький контакт
                    з природою.'); ?>
                </p>
                <p> <?php pll_e('«Відродження» - це початок нового життя, де ми самі створюємо його, формуючи нові основи та
                    цінності. Всі разом ми вишиваємо рушник нової долі Бородянки у новій Україні.'); ?>
                </p>
            </div>
            <picture
                    class="image rounded-10 overflow-hidden mb-32 -mx-gap h-[34vh] md:h-[40vh] lg:h-[4.2rem] md:h-[3.1rem] lg:h-[4.1rem] md:mb-0  md:-translate-x-gap ">
                <source srcset="<?= get_img_link('details') ?>.webp" media="(min-width: 640px)"/>
                <img src="<?= get_img_link('details-mob') ?>.webp" alt='Фото проекту'/>

            </picture>
            <div class="md:pl-32 lg:pl-[1.05rem] md:self-center">
                <h3 class="font-semibold h4 mb-16 text-24">
                    <?php pll_e('Деталі проєкту:'); ?>
                </h3>
                <ul>
                    <li class="grid grid-cols-[.22rem_1fr] gap-x-20 mb-16">
                        <div class="font-semibold">01</div>
                        <div><?php pll_e('Центральний елемент – Джерело Відродження'); ?></div>
                    </li>
                    <li class="grid grid-cols-[.22rem_1fr] gap-x-20 mb-16">
                        <div class="font-semibold">02</div>
                        <div><?php pll_e('Ігрова зона для дітей - зелений лабіринт'); ?></div>
                    </li>
                    <li class="grid grid-cols-[.22rem_1fr] gap-x-20 mb-16">
                        <div class="font-semibold">03</div>
                        <div><?php pll_e('Декоративна зона - квітники'); ?></div>
                    </li>
                    <li class="grid grid-cols-[.22rem_1fr] gap-x-20 mb-16">
                        <div class="font-semibold">04</div>
                        <div><?php pll_e('Зона відпочинку – місця з лавами'); ?></div>
                    </li>
                    <li class="grid grid-cols-[.22rem_1fr] gap-x-20 mb-16">
                        <div class="font-semibold">05</div>
                        <div><?php pll_e('Зона відпочинку навколо фонтану'); ?></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="presentation" class="py-32  relative presentation">
        <div class="container  ">
            <div class="h-[3.35rem] justify-center md:h-[5.7rem] flex flex-col max-w-[2.8rem] md:max-w-[5rem] lg:max-w-[8rem]  ">
                <h2 class="uppercase mb-24 h3 md:text-[.36rem] lg:text-[.4rem]">
                    <?php pll_e('Дізнайтеся більше про концепцію
                    <span class="text-main block md:ml-[1rem]">
								та особливості проєкту “ВІДРОДЖЕННЯ”
							</span>'); ?>
                </h2>
                <a href="https://www.dobrobat.in.ua/wp-content/uploads/2024/08/prezentacziya.pdf"
                   target="_blank"
                   class="w-max mt-auto md:mt-[.42rem] lg:hover:bg-main lg:hover:text-black  btn  font-semibold transition-colors text-m lg:text-l py-16 md:ml-[1rem] px-24 rounded-20 bg-black text-white"
                >
                   <?php pll_e('Переглянути презентацію'); ?>
                </a>
            </div>
        </div>
    </section>
    <section id="goal" class="py-40  lg:py-[.7rem] bg-[#F3F0E4]">

        <div class=" goal-container flex  h-screen overflow-hidden w-[400%]">

            <div class="goal pt-[1rem] pb-32 container h-screen flex items-center  ">
                <div class="grid lg:grid-cols-2 h-full lg:h-auto md:items-center w-full">
                    <div class="mb-16 md:h-full flex flex-col ">
                        <h2 class="uppercase  mb-32">
                            <?php pll_e('Наша <span class="text-main">мета</span>'); ?>
                        </h2>
                        <div class="h1 md:text-[.64rem] lg:mt-auto text-main mb-8">
                            01
                        </div>
                        <div class="pb-16 border-b border-solid border-black">
                            <div class="max-w-[5.3rem] md:text-[.2rem] text-l  font-semibold ">
                                <?php pll_e('Створити сучасний зелений простір, що буде символізувати «Відродження» міста та
                                жителів Бородянки'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="mt-auto md:mt-0 image rounded-10 md:rounded-20 overflow-hidden h-0 pb-[56.25%]">
                        <img src="<?= get_img_link('goal-1') ?>.webp" alt="01">
                    </div>
                </div>
            </div>
            <div class="goal pt-[1rem] pb-32 container h-screen flex items-center ">
                <div class="grid lg:grid-cols-2 h-full lg:h-auto md:items-center  w-full ">
                    <div class="mb-16 md:h-full flex flex-col">
                        <div class="h1 md:text-[.64rem] mt-[.75rem] md:mt-auto text-main mb-8">
                            02
                        </div>
                        <div class=" pb-16 border-b border-solid border-black">
                            <div class="max-w-[5.3rem] md:text-[.2rem] text-l  font-semibold ">
                               <?php pll_e(' Сформувати емоційно заряджені природні квітучі зони для взаємодії людини із природою
                                з метою енергетичного відновлення та сенсового наповнення'); ?>
                            </div>

                        </div>
                    </div>
                    <div class="mt-auto md:mt-0 image rounded-10 md:rounded-20 overflow-hidden h-0 pb-[56.25%]">
                        <img  src="<?= get_img_link('goal-2') ?>.webp" alt="2">
                    </div>
                </div>
            </div>
            <div class="goal pt-[1rem] pb-32 container h-screen flex items-center  ">
                <div class="grid lg:grid-cols-2 h-full lg:h-auto md:items-center  w-full">
                    <div class="mb-16 md:h-full flex flex-col">

                        <div class="h1 md:text-[.64rem] mt-[.75rem] md:mt-auto text-main mb-8">
                            03
                        </div>
                        <div class="pb-16 border-b border-solid border-black">
                            <div class="max-w-[5.3rem] md:text-[.2rem] text-l  font-semibold ">
                               <?php pll_e(' Забезпечити багатофункціональне використання
                                для різних верств населення'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto md:mt-0 image rounded-10 md:rounded-20 overflow-hidden h-0 pb-[56.25%]">
                        <img src="<?= get_img_link('goal-3') ?>.webp" alt="3">
                    </div>
                </div>
            </div>
            <div class="goal pt-[1rem] pb-32 container h-screen flex items-center  ">
                <div class="grid lg:grid-cols-2 h-full lg:h-auto md:items-center w-full">
                    <div class="mb-16 md:h-full flex flex-col">

                        <div class="h1 md:text-[.64rem] mt-[.75rem] md:mt-auto text-main mb-8">
                            04
                        </div>
                        <div class=" pb-16 border-b border-solid border-black">
                            <div class="max-w-[5.3rem] md:text-[.2rem] text-l  font-semibold ">
                               <?php pll_e(' Зелена зона біля центральної площі ім.Шевченка
                                має бути привабливою, квітучою, комфортною для
                                відвідувачів в усі сезони'); ?>
                            </div>

                        </div>
                    </div>
                    <div class="mt-auto md:mt-0 image rounded-10 md:rounded-20 overflow-hidden h-0 pb-[56.25%]">
                        <img  src="<?= get_img_link('goal-4') ?>.webp" alt="4">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-40 lg:py-[.7rem] ">
        <div class="container">
            <h2 class="uppercase mb-32 md:mb-40 "><?php pll_e('<span class="text-main">ескізи</span> майбутнього простору'); ?></h2>
            <div class="flex flex-wrap  lg:gap-x-20">
                <div class="w-full lg:w-[calc(50%-.1rem)]">
                    <h3 class="mb-16 md:mb-24">
                       <?php pll_e(' Тут будуть місця для відпочинку людей різного віку:'); ?>
                    </h3>
                    <ul class="text-m mb-32 lg:mb-[.55rem] ">
                        <li class="mb-12">
                            <?php pll_e('• можна погратися з дітьми або спостерігати за ними, насолоджуючись сміхом дітей, що
                            граються біля фонтану'); ?>
                        </li>
                        <li class="mb-12">
                            <?php pll_e('• усамітнитися в тіні дерев на зручних лавах, залишаючись в обіймах природи'); ?>
                        </li>
                        <li class="mb-12">
                           <?php pll_e(' • поспілкуватися з друзями, зібравшись на зручних дерев’яних терасах-лавах'); ?>
                        </li>
                    </ul>
                    <div class="swiper" data-swiper="visual-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-1') ?>.webp"  alt="1">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-2') ?>.webp"  alt="2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-3') ?>.webp"  alt="3">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-4') ?>.webp"  alt="4">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-5') ?>.webp"  alt="5">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-6') ?>.webp"  alt="6">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-7') ?>.webp"  alt="7">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[.45rem] md:h-[1.2rem] overflow-hidden rounded-5">
                                    <img  src="<?= get_img_link('e-8') ?>.webp"  alt="8">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-[calc(50%-.1rem)] mt-12 lg:mt-0">
                    <div class="swiper" data-swiper="visual">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-1') ?>.webp"  alt="1">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-2') ?>.webp"  alt="2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-3') ?>.webp"  alt="3">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-4') ?>.webp"  alt="4">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-5') ?>.webp"  alt="5">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-6') ?>.webp"  alt="6">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-7') ?>.webp"  alt="7">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image h-[34vh] md:h-[40vh] lg:h-[4.2rem] overflow-hidden rounded-10">
                                    <img  src="<?= get_img_link('e-8') ?>.webp"  alt="8">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation flex border border-solid border-black py-16 rounded-40 w-max mt-24 ml-auto">
                            <button class="mx-16 prev">
                                <svg class="w-16 h-16 fill-main">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                            <button class="mx-16 next">
                                <svg class="w-16 h-16 -scale-100">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-40 lg:py-[.7rem] ">

        <div class="relative h-full init-youtube">
            <div class="h-0 pb-[56.25%]   overflow">
                <div class="init-youtube-video w-full h-full absolute" id="Jmlr-zSnkxI"></div>
            </div>
            <div class="absolute inset-0  init-youtube-overlay transition-opacity flex items-center justify-center  ">
                <img class="inset-0  absolute h-full object-cover object-center"          src="<?= get_img_link('video-bg') ?>.webp"  alt="Video bg">
                <div class="text-white relative w-max py-4 md:py-8 pl-16 pr-8 md:pl-24 md:pr-12 rounded-40 bg-white/[.4] flex items-center">
                    <h2 class="text-s md:text-l font-normal flex-shrink-0 mr-8"><?php pll_e('Віртуальна прогулянка сквером'); ?></h2>
                    <button class="group init-youtube-button flex items-center justify-center w-32 h-32 md:w-[.6rem]  md:h-[.6rem] rounded bg-white">
                        <svg class="icon fill-main lg:group-hover:fill-[#ff0000] group-active:fill-[#ff0000]">
                            <use xlink:href="#play"></use>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </section>
    <section class="py-40 lg:py-[.7rem] ">
        <div class="container">
            <h2 class="mb-24"><?php pll_e('ПАРТНЕРИ <span class="text-main">ПРОЄКТУ</span>'); ?></h2>
            <div class="swiper rounded-10 bg-[#F3F0E4] py-40 lg:px-[.6rem]" data-swiper="partners">
                <div class="swiper-wrapper  h-[2.4rem] lg:h-[1.6rem]">
                    <div class="swiper-slide flex items-center justify-center">
                        <img class="w-[2.4rem] " src="<?= get_img_link('dobroPark') ?>.webp" alt="dobroPark">
                    </div>
                    <div class="swiper-slide flex items-center justify-center">
                        <img class="w-[2.4rem] " src="<?= get_img_link($en ? 'gromada_en' : 'gromada') ?>.webp" alt="dobroPark">
                    </div>

                </div>

            </div>
            <div class="swiper-navigation flex border border-solid border-black py-16 rounded-40 w-max mx-auto lg:ml-auto lg:mr-0 mt-24 ">
                <button class="mx-16 prev partners-prev">
                    <svg class="w-16 h-16 fill-main">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </button>
                <button class="mx-16 next partners-next">
                    <svg class="w-16 h-16 -scale-100">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </button>
            </div>

        </div>
    </section>
    <section id="contacts" class="py-40 lg:py-[.7rem] ">
        <div class="container ">
            <div class="py-40 px-24 lg:px-[.84rem] lg:py-[.84rem]  h-full bg-main rounded-20 md:grid md:grid-cols-2 lg:gap-x-[.7rem] lg:grid-cols-[3.8rem_1fr]">
                <h2 class=" uppercase mb-16 md:col-span-2"><?php pll_e('хочете допомогти проєкту? <span class="text-white">долучайтесь</span>'); ?>
                </h2>
                <div class="text-m font-bold mb-32">
                   <?php pll_e('робіть донат або звяжіться з нами зручним способом'); ?>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <a href="https://secure.wayforpay.com/button/bb434fa85ac60" target="_blank"
                       class="lg:hover:bg-white h-full flex items-center justify-center lg:hover:text-black  btn  font-semibold transition-colors text-l w-full  mb-16  p-16 rounded-[.5rem] bg-black text-white uppercase ">
                        <?php pll_e('донат'); ?>
                    </a>
                    <div class="flex px-16 md:justify-between lg:justify-center">
                        <a href="https://whatsapp.com/channel/0029VaZCTPQ9MF97dzf0KS2F" target="_blank"
                           class="lg:hover:bg-white transition-colors px-24 py-[.15rem] lg:py-0 flex items-center justify-center bg-black rounded-[.5rem] lg:w-[.88rem] lg:h-[.77rem]">
                            <svg class="w-40 h-40">
                                <use xlink:href="#whatsapp"></use>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/dobrobat.in.ua" target="_blank"
                           class="lg:hover:bg-white transition-colors px-24 py-[.15rem] lg:py-0 flex items-center justify-center bg-black rounded-[.5rem] lg:w-[.88rem] lg:h-[.77rem]">
                            <svg class="w-40 h-40 lg:hover:fill-black fill-white">
                                <use xlink:href="#inst"></use>
                            </svg>
                        </a>
                        <a href="https://t.me/dobrobat_in_ua" target="_blank"
                           class="lg:hover:bg-white transition-colors px-24 py-[.15rem] lg:py-0 flex items-center justify-center bg-black rounded-[.5rem] lg:w-[.88rem] lg:h-[.77rem]">
                            <svg class="w-40 h-40">
                                <use xlink:href="#tg"></use>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </section>


<?php
get_footer();
?>