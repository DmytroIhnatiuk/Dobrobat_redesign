<?php /* Template Name: Tenders */ ?>
<?php
get_header();
?>


    <main class="">
    <section class="section section__press-about py-70">
        <div class="container">

            <div class="tenders">
                <h1 class="fz-54 f-600 mb-3"><?php pll_e("Закупівлі"); ?>
                </h1>
                <?php if (1 == 1): ?>
                    <div class="tenders__wrapper ">
                        <?php $tenders = get_posts([
                            'post_type' => 'tender',
                            'numberposts' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC',
                        ]);
                        foreach ($tenders as $tender) {
                            $file = get_field('file', $tender->ID);
                            $fileLink = get_field('file_link', $tender->ID);
                            ?>
                            <a target="_blank" href="<?= $file ?? $fileLink ?>" class="tenders__item">
                                <h2 class="fz-24 f-600 "><?= $tender->post_title; ?></h2>
                                <span class="fz-16 ">
                                    <?= get_the_excerpt($tender->ID) ?>
                                </span>
                                <div>
                                    <button
                                            class="t-upper btn btn_ac fz-14 f-600 mb-2 w-100"><?= $file ? "завантажити" : 'переглянути' ?></button>
                                    <div class="date fz-14">Опубліковано: <?= get_the_date('d.m.y', $tender->ID) ?></div>

                                </div>
                           </a>
                        <?php }

                        ?>
                    </div>
                <?php endif; ?>


            </div>


        </div>
    </section>

<?php
get_footer();
?>