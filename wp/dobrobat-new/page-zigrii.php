<?php /* Template Name: Zigrii page */

get_header();

?>

    <main class="flex-grow text-m">


        <section class="py-48 lg:py-0 zigrii-hero  container  bg-accent  lg:h-[6.6rem] relative ">

            <div class="grid lg:grid-cols-2 relative z-[1] gap-16 md:gap-20">
                <div class="self-center">
                    <h1 class="mb-14 md:mb-40 font-extrabold">
							<span class="text-white block">
								<?php pll_e('Проєкт «Зігрій»'); ?>
							</span>
                        <?php pll_e('Підтримай українські родини цієї зими'); ?>
                    </h1>
                    <a href="https://secure.wayforpay.com/button/b82b603e0a982" target="_blank"
                       class="lg:hover:text-black lg:hover:bg-white text-white bg-black border-solid  z-[11] font-bold transition-colors   py-20 px-24 rounded-10   uppercase ">
                        <?php pll_e('ЗРОБИТИ ДОНАТ'); ?>
                    </a>
                </div>
                <div class="image relative h-[3.2rem] md:h-[4.8rem]  lg:h-[6.6rem] ">
                    <img src="<?= get_img_link_all('zigrii/hero') ?>.webp" class='object-contain'>
                </div>
            </div>


        </section>


        <section class="py-32 lg:py-[.5rem]">
            <div class="container">
                <div class="grid md:grid-cols-2 lg:grid-cols-12 md:gap-20 gap-16">
                    <div class="md:col-span-2 lg:col-span-4">
                        <h2 class="h1 font-extrabold mb-24 lg:mb-56">
                            <?php pll_e('Про проєкт'); ?>
                        </h2>
                        <div class="md:text-l md:leading-[.28rem] font-semibold mb-24">
                            <?php pll_e('Проєкт «Зігрій» створений для підтримки українських сімей, які опинилися в складних життєвих
                            обставинах.'); ?>
                        </div>
                        <div class="md:leading-[.24rem] ">
                            <?php pll_e('Ми допомагаємо родинам залишатися зі світлом, теплом та зв’язком у найскрутніші часи. Це
                            особливо важливо в умовах нестабільного енергозабезпечення та холодної зими.'); ?>
                        </div>
                    </div>
                    <div class="row-start-1 md:row-start-2 lg:row-start-auto h-[3rem] lg:col-span-4 image md:h-[4.2rem] rounded-15 overflow-hidden relative">
                        <img src="<?= get_img_link_all('zigrii/photo-1') ?>.webp" alt="photo" class="object-cover">
                    </div>
                    <div class="lg:col-span-4  h-[3rem] image md:h-[4.2rem] rounded-15 overflow-hidden relative">
                        <img src="<?= get_img_link_all('zigrii/photo-2') ?>.webp" alt="photo" class="object-cover">
                    </div>
                </div>

            </div>

        </section>
        <section class="py-32 lg:py-[.5rem]">
            <div class="container">
                <div class="grid md:grid-cols-2 lg:grid-cols-12 md:gap-20 gap-16">
                    <div class="md:col-span-2 lg:col-span-4 lg:h-[4.8rem] lg:pt-[.7rem]">
                        <h2 class="h1 font-extrabold mb-24 lg:mb-36 md:tracking-[-.03rem]">
                            <?php pll_e('Наші досягнення: Перший етап'); ?>
                        </h2>
                        <div class="md:leading-[.28rem] ">
                            <?php pll_e("Ми вже реалізували перший етап проєкту в п'яти областях України: Львівській,
                            Івано-Франківській, Чернівецькій, Кіровоградській та Харківській."); ?>
                        </div>
                    </div>
                    <div class=" md:col-span-2 lg:col-span-8 pb-[56.25%] lg:pb-0 h-0 relative ">
                        <img src="<?= get_img_link_all('zigrii/zigrii-map') ?>.webp" alt=""
                             class="h-full lg:h-[5.5rem] absolute w-full">
                    </div>
                    <div class=" lg:col-span-5 h-[2rem]  md:h-[3rem] image md:h-3.03rem] rounded-15 overflow-hidden relative">
                        <img src="<?= get_img_link_all('zigrii/photo-3') ?>.webp" alt="" class="object-cover">
                    </div>
                    <div class="lg:col-span-5 lg:col-start-7 md:self-end lg:-translate-x-20">
                        <div class="font-extrabold text-accent text-[.36rem] lg:text-[.52rem] mb-6">
                            <?php pll_e('4000 родин'); ?>
                        </div>
                        <div class="md:text-l font-semibold lg:leading-[.28rem]">
                            <?php pll_e('Отримали зарядні станції ESS-600 потужністю 600 W.
                            Ці станції дозволяють забезпечувати електроенергію для роботи необхідних пристроїв, а також
                            підтримувати роботу газових котлів.'); ?>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="py-32 lg:py-[.5rem] container">
            <div class="bg-accent p-24 md:py-36 md:px-48 lg:py-[.75rem]  overflow-clip lg:px-[.85rem] rounded-15 text-white grid lg:grid-cols-2 lg:gap-20 gap-16">

                <h2 class="h1 md:leading-[.48rem] font-extrabold relative z-[1]">
                    <?php pll_e('Наступний крок: розширення на інші регіони'); ?>
                </h2>


                <div class="relative">
                    <div class="ellipse absolute md:w-[4.3rem] md:h-[1.7rem] -left-[1.5rem] -rotate-[14deg]">

                    </div>
                    <div class=" z-[1] relative md:text-l md:leading-[.28rem] font-normal md:mb-32 mb-24">
                        <?php pll_e('Ми хочемо поширити проєкт «Зігрій» на інші регіони України, де є потреба в енергетичній
                        підтримці родин. Для цього нам потрібна твоя допомога'); ?>
                    </div>
                    <a href="https://secure.wayforpay.com/button/b82b603e0a982" target="_blank"
                       class="relative w-full text-center md:w-max lg:hover:text-black lg:hover:bg-white text-white bg-black border-solid  z-[11] font-bold transition-colors   py-20 px-24 rounded-10   uppercase ">
                        <?php pll_e('ЗРОБИТИ ДОНАТ'); ?>
                    </a>
                </div>
            </div>
        </section>
        <section
                class="py-32 lg:py-[.5rem] relative before:absolute before:bottom-0 before:w-full before:h-[1rem] md:before:h-[2.5rem] before:bg-accent">
            <div class="container">
                <div class="grid  lg:grid-cols-12 md:gap-20 gap-16">
                    <div class="lg:col-span-4">
                        <h2 class="h1 font-extrabold md:leading-[.52rem]">
                            <?php pll_e('Ціль проєкту «Зігрій»'); ?>
                        </h2>

                    </div>

                    <div class="lg:col-span-8 md:text-l md:leading-[.28rem]">
                        <div class=" font-semibold mb-16">
                            <?php pll_e("Ми допомагаємо малозабезпеченим родинам, людям з інвалідністю та сім'ям українських
                            захисників пережити зиму в нормальних умовах."); ?>
                        </div>
                        <div class="">
                            <?php pll_e('Наша мета — зробити їх життя комфортнішим та безпечнішим в цей важкий час.'); ?>
                        </div>
                    </div>
                    <div class="lg:col-span-12 lg:mt-48  h-[2.4rem] image md:h-[4.8rem] lg:h-[6.56rem] rounded-15 overflow-hidden relative

">
                        <img src="<?= get_img_link_all('zigrii/photo-4') ?>.webp" alt="" class="object-cover">
                    </div>
                </div>

            </div>

        </section>
        <section class="py-32 lg:py-[.5rem] zigrii-footer  relative bg-accent  ">
            <div class="container lg:pt-[.7rem] lg:h-[5.5rem] ">
                <div class="grid gap-16 md:gap-20 lg:grid-cols-2 text-white">
                    <div class="relative z-[1]">
                        <h2 class="h1 font-extrabold md:leading-[.52rem] md:mb-40 mb-24">
                            <?php pll_e('Зроби донат – допоможи українським родинам зігрітися!'); ?>
                        </h2>
                        <div class="mb-16 md:mb-32 max-w-[4.84rem] font-semibold text-l md:text-[.24rem] md:leading-[.34rem]">
                            <?php pll_e('Підтримай проєкт «Зігрій» і зміни життя людей на краще!'); ?>
                        </div>
                        <a href="https://secure.wayforpay.com/button/b82b603e0a982" target="_blank"
                           class="relative w-full text-center md:w-max lg:hover:text-black lg:hover:bg-white text-white bg-black border-solid  z-[11] font-bold transition-colors   py-20 px-24 rounded-10   uppercase ">
                            <?php pll_e('ПІДТРИМАТИ'); ?>
                        </a>
                    </div>
                    <div class="relative lg:pl-[.86rem] pt-16">
                        <div class="relative  z-[1] font-semibold md:text-l md:leading-[.28rem]">
                            <?php pll_e('Твій внесок допоможе забезпечити ще більше родин теплом, світлом і надійним зв’язком. Кожен
                            донат – це підтримка тих, хто потребує допомоги вже сьогодні.'); ?>
                        </div>
                        <div class="-top-24 -left-[2.4rem] ellipse w-[6.65rem] h-[3rem] absolute -rotate-[14.36deg]">

                        </div>

                    </div>

                </div>

            </div>
            <img src="<?= get_img_link_all('zigrii/footer') ?>.webp" alt="bg"
                 class="-mt-[1.4rem] mx-auto lg:mt-0 lg:mx-0 -bottom-32 block relative lg:absolute lg:right-[var(--container-gap)] lg:bottom-0 w-full lg:w-[6rem] h-[4rem] lg:h-full object-contain object-bottom">

        </section>
        <section class="bg-black relative py-48 lg:py-[1rem]">
            <div class="container">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-16 lg:gap-20">
                    <div class="text-center md:text-left mb-16 md:mb-0 font-semibold text-white text-l md:text-[.24rem]">
                        <?php pll_e('Проєкт реалізується за підтримки:'); ?>
                    </div>
                    <div class="image relative h-[.5rem] md:h-[.73rem]">
                        <img src="<?= get_img_link_all('zigrii/energy') ?>.webp" class="object-contain" alt="">
                    </div>
                    <div class="image relative h-[.5rem] md:h-[.73rem]">
                        <img src="<?= get_img_link_all('zigrii/naftogaz') ?>.webp" class="object-contain" alt="">
                    </div>
                    <div class="image relative h-[.5rem] md:h-[.73rem]">
                        <img src="<?= get_img_link_all('zigrii/db-logo') ?>.webp" class="object-contain" alt="">
                    </div>
                </div>
            </div>

        </section>
    </main>

<?php
get_footer();
?>