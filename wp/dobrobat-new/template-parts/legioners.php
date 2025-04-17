<section class="section section__legion pos-r legion">
    <div class="container  pos-r">
        <div class="row legion__header">
            <div class="col-lg-6"><h2 class="fz-52"><?php pll_e('Інтернаціональний легіон'); ?></h2></div>
            <div class="col-lg-6">
                <?php

                $link = '';
                if (get_locale() == 'en') {
                    $link = '/en/';
                } ?>

                <a href="<?= $link; ?>/legion/" class="btn btn_outline width-mc ">
                    <span><?php pll_e('ДІЗНАТИСЯ  більше'); ?></span> </a></div>

        </div>
        <div class="legion__content d-flex">
            <div class="decor image">
                <?= dn_get_image_attachment(13842, 'legion_photo', 'Інтернаціональний легіон'); ?>
            </div>
            <div class="legion__items --align-center">
                <?php
                $args = array(
                    'post_type' => 'legion',
                    'posts_per_page' => 4,
                    'post__not_in' => array(get_the_ID())
                );
                if (get_locale() == 'en') {
                    $args['lang'] = 'en';
                }

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(); ?>
                        <div class="legion-item-card">
                            <div class="legion-item-card__image image">
                                <?php
                                $imageId = get_field('legion_photo') ? get_field('legion_photo') : 13896;
                                echo dn_get_image_attachment($imageId, 'dobrobat_legion_prev', get_the_title());
                                ?>
                                <?php if (get_field('country', get_the_ID())["flag"]): ?>
                                    <div class="flag">
                                        <?php echo dn_get_image_attachment(get_field('country', get_the_ID())["flag"], 'legion_flag', get_field('country', get_the_ID())["country_name"]);
                                        ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="legion-item-card__descr">
                                <h4 class="t-upper"><?php the_title() ?></h4>
                                <div class="f-w-500">
                                    <?= get_field('country', get_the_ID())["country_name"]; ?>
                                </div>
                                <a href="<?= esc_url(get_permalink(get_the_ID())); ?>"
                                   class="t-upper t-under fz-14"><?php pll_e('ЧИТАТИ БІЛЬШЕ'); ?></a>
                            </div>
                        </div>


                    <?php }
                }

                wp_reset_postdata();


                ?>


            </div>
        </div>

    </div>
</section>