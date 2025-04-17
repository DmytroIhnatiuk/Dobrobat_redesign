<?php /* Template Name: Новини */ ?>
<?php
get_header();
?>
    <main class="legion-page">
    <section class="section  py-70">
        <div class="container">


            <h1 class="fz-54 f-600"><?php pll_e('Інтернаціональний легіон'); ?>

            </h1>
            <?php if (have_posts()) : ?>
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post(); ?>
                    <div class="legion-page__item">
                        <a href="<?= esc_url(get_permalink(get_the_ID())); ?>" class="image bdr-10">
                            <?php
                            $imageId = get_field('legion_photo', get_the_ID()) ? get_field('legion_photo', get_the_ID()) : 13896;
                            echo dn_get_image_attachment($imageId, 'dobrobat_legion', get_the_title());
                            ?>


                        </a>
                        <div class="information">
                          <span class="legion__label  bdr-10">
                               <?php pll_e('#інтернаціональний_легіон'); ?>
                                </span>
                            <h2 class="t-upper "><?php the_title() ?></h2>
                            <?php $country = get_field('country'); ?>
                            <div class="legion__country d-flex --align-center">
                                <?php if ($country["flag"]): ?>
                                    <div class="flag image">
                                        <?php echo dn_get_image_attachment($country["flag"], 'legion_flag', $country["country_name"]);
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <div class="fz-24 f-700"><?= $country["country_name"] ?></div>
                            </div>


                        </div>


                        <div class="descr">
                            <p class="fz-18">
                                <?php
                                $text = get_the_content();

                                if (mb_strlen($text, 'UTF-8') > 210) {
                                    echo mb_substr($text, 0, 210, 'UTF-8') . '...';
                                } else {
                                    echo $text;
                                } ?>

                            </p>
                            <a href="<?= esc_url(get_permalink(get_the_ID())); ?>" class="t-upper fz-14 f-600 t-under">
                                <?php pll_e('читати більше'); ?></a>
                        </div>
                    </div>
                <?php endwhile;

                the_posts_navigation();


            endif;
            ?>


<!--            <button class="btn btn_outline  m-a"><span class="fz-18">Завантажити</span></button>-->


        </div>
    </section>







<?php
get_footer();
?>