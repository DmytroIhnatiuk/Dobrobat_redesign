<?php /* Template Name: Історії постраждалих*/ ?>
<?php
get_header();
?>


    <main class="stories-victims">
    <section class="section  py-70">
    <div class="container">


        <h1 class="fz-54 f-600">
            <?= pll_e('Історії постраждалих'); ?>
        </h1>
        <?php if (have_posts()) : ?>
            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post(); ?>
                <div class="heroes-page__item">
                    <a href="<?= esc_url(get_permalink(get_the_ID())); ?>" class="image bdr-10">
                        <?php
                        $imageId = get_post_thumbnail_id() ? get_post_thumbnail_id() : 15148;
                        echo dn_get_image_attachment($imageId, 'medium', false, get_the_title());
                        ?>
                    </a>
                    <div class="information">
                        <h3 class="t-upper"><?= get_the_title(); ?></h3>
                        <div class="fz-24 f-700"><?= get_field('address', get_the_ID()) ?></div>
                        <span class="heroes__label  bdr-10">
                                       <?= pll_e('#історії_сповіді'); ?>
                                </span>
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
                        <a href="<?= esc_url(get_permalink(get_the_ID())); ?>"
                           class="t-upper fz-14 f-600"><?= pll_e('ЧИТАТИ БІЛЬШЕ'); ?></a>
                    </div>
                </div>

            <?php endwhile;

            the_posts_navigation();


        endif;
        ?>




    </div>











<?php
get_footer();
?>