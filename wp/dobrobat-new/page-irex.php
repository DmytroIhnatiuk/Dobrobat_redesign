<?php /* Template Name: Irex page */

get_header();

?>

    <main class="flex-grow">


        <section class="pt-[.65rem] relative hero">
            <div class="container">
                <div class="grid gap-x-24 lg:grid-cols-12">
                    <h1 class="h2 lg:col-span-9 mb-24"><?php pll_e('Добробат допомагає з розбиранням завалів українських домівок'); ?></h1>
                    <div class="mb-24 lg:mb-[.6rem] lg:col-span-full image  h-[1.35rem] md:h-[4.2rem] rounded-[.15rem] overflow-clip">
                        <img src="<?= get_img_link('/irex/irex-hero') ?>.webp" alt='<?= the_title(); ?>'/>
                    </div>
                </div>


            </div>
        </section>
        <section class="container">
            <div class="irex-page__goal gap-y-24  grid lg:grid-cols-2 md:gap-x-[.5rem] md:gap-y-[.48rem] py-32 px-16 md:p-[.64rem] w-full rounded-[.15rem] overflow-clip]">
                <div class="self-baseline grid gap-x-16 grid-cols-[.64rem_1fr] md:grid-cols-[.8rem_1fr]">
                    <div class="goal-icon w-[.64rem] md:w-[.8rem] flex items-center justify-center h-[.64rem] md:h-[.8rem] bg-white rounded">
                        <img src="<?= get_img_link('/irex/target') ?>.webp" alt='icon time' class="w-40 h-40"/>

                    </div>

                    <h2 class="text-[.24rem] md:text-[.24rem] md:text-[.4rem]  self-center"><?php pll_e('Мета проєкту'); ?></h2>

                    <p class="mt-16 md:mt-0 md:text-l font-medium col-span-2 md:col-span-1 md:col-start-2">
                        <?php pll_e('Допомога жителям з розбиранням завалів, спричинених ворожими обстрілами, та вивезення будівельного сміття на спеціальні полігони'); ?>
                    </p>
                </div>
                <div class="self-baseline grid gap-x-16 grid-cols-[.64rem_1fr] md:grid-cols-[.8rem_1fr]">
                    <div class="goal-icon w-[.64rem] md:w-[.8rem] flex items-center justify-center h-[.64rem] md:h-[.8rem] bg-white rounded">

                        <img src="<?= get_img_link('/irex/time') ?>.webp" alt='icon time' class="w-40 h-40"/>


                    </div>

                    <h2 class="text-[.22rem] md:text-[.4rem]  self-center"><?php pll_e('Терміни реалізації:'); ?></h2>
                    <p class="mt-16 md:mt-0 md:text-l font-medium col-span-2 md:col-span-1 md:col-start-2"><?php pll_e('6 місяців'); ?></p>

                </div>
                <div class="self-baseline grid gap-x-16 grid-cols-[.64rem_1fr] md:grid-cols-[.8rem_1fr]">
                    <div class="goal-icon w-[.64rem] md:w-[.8rem] flex items-center justify-center h-[.64rem] md:h-[.8rem] bg-white rounded">
                        <img src="<?= get_img_link('/irex/goal') ?>.webp" alt='icon time' class="w-40 h-40"/>
                    </div>

                    <h2 class="text-[.24rem] md:text-[.4rem]  self-center"><?php pll_e('Основні завдання:'); ?></h2>
                    <ul class="mt-16 md:mt-0 md:text-l font-medium col-span-2 md:col-span-1 md:col-start-2">
                        <li><?php pll_e('здійснення 156 виїздів волонтерів у 4 областях України.'); ?></li>
                        <li><?php pll_e('розбирання завалів загалом у 85 домогосподарствах'); ?></li>
                        <li><?php pll_e('вивезення будівельного сміття на спецполігони'); ?></li>
                    </ul>

                </div>
                <div class="self-baseline grid gap-x-16 grid-cols-[.64rem_1fr] md:grid-cols-[.8rem_1fr]">
                    <div class="goal-icon w-[.64rem] md:w-[.8rem] flex items-center justify-center h-[.64rem] md:h-[.8rem] bg-white rounded">
                        <img src="<?= get_img_link('/irex/location') ?>.webp" alt='icon time' class="w-40 h-40"/>


                    </div>

                    <h2 class="text-[.24rem] md:text-[.4rem]  self-center"><?php pll_e('Локація робіт:'); ?></h2>
                    <ul class="mt-16 md:mt-0 md:text-l font-medium col-span-2 md:col-span-1 md:col-start-2">
                        <li><?php pll_e('Харківська область: Чугуївська територіальна громада, Дергачівська територіальна
                            громада.'); ?>
                        </li>
                        <li><?php pll_e('Миколаївська область: Первомайська селищна територіальна громада.'); ?></li>
                        <li><?php pll_e('Запорізька область: Кушугумська громада.'); ?></li>
                        <li><?php pll_e('Сумська область: м. Тростянець'); ?></li>
                    </ul>

                </div>
            </div>
        </section>
        <section class="relative irex-page__report py-[.64rem] md:py-[1.3rem] container">
            <h2 class="mb-[.64rem]"><?php pll_e('Звіти минулих виїздів'); ?></h2>
            <?php if (have_rows('work_repeater')):
                while (have_rows('work_repeater')) : the_row(); ?>

                    <div class=" mb-32 grid grid-cols-1 md:grid-cols-12 gap-x-24 md:-ml-24">
                        <div class="md:col-start-2 md:col-span-4 mb-16 md:mb-0">
                            <div class="text-[.32rem] md:text-[.4rem] font-semibold mb-16 md:mb-20 relative before:absolute before:rounded before:bg-black before:w-24 before:-left-[.52rem] before:h-24 before:top-1/2 before:-translate-y-1/2">
                                <?= get_sub_field('title'); ?>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 24 32"
                                     fill="none">
                                    <path d="M12 0C8.8187 0.00422007 5.7689 1.26986 3.51938 3.51938C1.26986 5.7689 0.00422007 8.8187 0 12C0 20.615 11.18 31.405 11.655 31.86C11.7474 31.9498 11.8712 32 12 32C12.1288 32 12.2526 31.9498 12.345 31.86C12.82 31.405 24 20.615 24 12C23.9958 8.8187 22.7301 5.7689 20.4806 3.51938C18.2311 1.26986 15.1813 0.00422007 12 0ZM12 17.5C10.9122 17.5 9.84883 17.1774 8.94436 16.5731C8.03989 15.9687 7.33495 15.1098 6.91866 14.1048C6.50238 13.0998 6.39346 11.9939 6.60568 10.927C6.8179 9.86011 7.34172 8.8801 8.11091 8.11091C8.8801 7.34172 9.86011 6.8179 10.927 6.60568C11.9939 6.39346 13.0998 6.50238 14.1048 6.91866C15.1098 7.33494 15.9687 8.03989 16.5731 8.94436C17.1774 9.84883 17.5 10.9122 17.5 12C17.4991 13.4584 16.9194 14.8569 15.8881 15.8881C14.8569 16.9194 13.4584 17.4991 12 17.5Z"
                                          fill="#364FA9"/>
                                </svg>
                                <div class="font-bold ml-[.14rem] text-l md:text-24">
                                    <?= get_sub_field('location'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="font-semibold md:text-l md:col-span-7">
                            <?= get_sub_field('descr'); ?>
                        </div>
                        <?php if (get_sub_field('report_image')): ?>
                            <div class="image mt-[.64rem] md:col-start-6 md:col-span-7 h-[2rem] md:h-[5rem]">
                                <?= dn_get_image_attachment(get_sub_field('report_image'), 'full', 'image') ?></div>
                        <?php elseif (get_sub_field('images')): ?>
                            <div class="mt-[.64rem] md:col-start-2 md:col-span-11">
                                <div class="swiper mr-[var(--container-gap-decrement)]" data-swiper="report">
                                    <div class="swiper-wrapper mb-40">
                                        <?php foreach (get_sub_field('images') as $image):

                                            ?>
                                            <div class="swiper-slide image h-[2rem] md:h-[2.78rem] rounded-[.15rem] overflow-hidden">
                                                <?= dn_get_image_attachment($image['image'], 'medium', 'image') ?>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="swiper-navigation flex justify-end mr-[var(--container-gap)]">
                                        <button class="prev -scale-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                 viewBox="0 0 50 50"
                                                 fill="none">
                                                <circle cx="25" cy="25" r="23.5" stroke="#101113" stroke-width="3"/>
                                                <path d="M35.0607 26.0607C35.6464 25.4749 35.6464 24.5251 35.0607 23.9393L25.5147 14.3934C24.9289 13.8076 23.9792 13.8076 23.3934 14.3934C22.8076 14.9792 22.8076 15.9289 23.3934 16.5147L31.8787 25L23.3934 33.4853C22.8076 34.0711 22.8076 35.0208 23.3934 35.6066C23.9792 36.1924 24.9289 36.1924 25.5147 35.6066L35.0607 26.0607ZM16 26.5H34V23.5H16V26.5Z"
                                                      fill="#101113"/>
                                            </svg>
                                        </button>
                                        <button class="next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                 viewBox="0 0 50 50"
                                                 fill="none">
                                                <circle cx="25" cy="25" r="23.5" stroke="#101113" stroke-width="3"/>
                                                <path d="M35.0607 26.0607C35.6464 25.4749 35.6464 24.5251 35.0607 23.9393L25.5147 14.3934C24.9289 13.8076 23.9792 13.8076 23.3934 14.3934C22.8076 14.9792 22.8076 15.9289 23.3934 16.5147L31.8787 25L23.3934 33.4853C22.8076 34.0711 22.8076 35.0208 23.3934 35.6066C23.9792 36.1924 24.9289 36.1924 25.5147 35.6066L35.0607 26.0607ZM16 26.5H34V23.5H16V26.5Z"
                                                      fill="#101113"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>


                <?php endwhile;
            endif;
            ?>

        </section>
        <section class="container pb-[.8rem]">

            <div class="max-w-[11.92rem] text-center leading-[.28rem] mx-auto font-semibold text-l md:text-[.2rem] p-[.4rem] bg-white rounded-[.15rem]">
                <?php pll_e('  Цей проєкт став можливим завдяки програмі "Український фонд швидкого реагування", яку втілює IREX за підтримки Державного департаменту США. Вміст є виключною відповідальністю громадської організації «Добробат - добровольчий будівельний батальйон» і не обовʼязково відображає погляди IREX або Державного департаменту США.'); ?>
            </div>

        </section>


    </main>
    <footer class="image bg-black h-[2rem] md:h-[4rem] lg:h-[6.55rem]">
        <img src="<?= get_img_link('/irex/irex-bg') ?>.webp" alt='<?= the_title(); ?>'/>
    </footer>
<?php
get_footer();
?>