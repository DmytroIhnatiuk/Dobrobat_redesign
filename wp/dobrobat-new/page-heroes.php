<?php /* Template Name: Герої добробату*/ ?>
<?php
get_header();
?>


    <main class="heroes-page">
    <section class="section section__heroes py-70">
        <div class="container">


            <h1 class="fz-54 f-600">
                <?= pll_e('Герої «Добробату»'); ?>
            </h1>
            <?php $args = [
                'post_type' => 'heroes',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date',
            ];
            if (get_locale() == 'en') {
                $args['lang'] = 'en';
            }
            foreach (get_posts($args) as $heroesItem) {


                ?>


                <div class="heroes-page__item">
                    <div class="information">
                        <h3 class="t-upper"><?= get_field('heroes_name', $heroesItem->ID) ?></h3>
                        <div class="fz-24 f-700"><?= get_field('heroes_adress', $heroesItem->ID) ?></div>
                        <span class="heroes__label  bdr-10">
                                       <?= pll_e('#герої_добробату'); ?>
                                </span>
                    </div>

                    <a href="<?= get_permalink($heroesItem->ID) ?>" class="image bdr-10">
                        <?= wp_get_attachment_image(get_field('heroes_main_img', $heroesItem->ID), 'dobrobat_team', false, array('width' => 'dobrobat_team', 'height' => 'dobrobat_team',  'alt' => get_field('heroes_name', $heroesItem->ID)));
                        ?>
                    </a>

                    <div class="descr">
                        <p class="fz-18">
                            <?= trim_text_to(get_field('heroes_text', $heroesItem->ID), 200); ?>
                        </p>
                        <a href="<?= get_permalink($heroesItem->ID) ?>"
                           class="t-upper fz-14 f-600"><?= pll_e('Переглянути'); ?></a>
                    </div>
                </div>

                <?php
            }
            ?>

<!--            <button class="btn btn_outline  m-a"><span class="fz-18">--><?//= pll_e('БІЛЬШЕ героїв'); ?><!--</span></button>-->


        </div>
    </section>










<?php
get_footer();
?>