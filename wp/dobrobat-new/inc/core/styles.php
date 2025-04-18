<?php
//STYLES connect start
if (!function_exists('dobrobat_styles_setup')) :
    function dobrobat_styles_setup()
    {
        $release_version = '2.0.5';
        if (get_field('isNew_design', get_the_ID())):
            wp_enqueue_style('tailwind-style', get_theme_file_uri('/assets/redesign/css/tailwind.min.css'), array(), $release_version);
            wp_enqueue_style('swiper-style', get_theme_file_uri('/assets/redesign/css/swiper.min.css'), array(), $release_version);
            wp_enqueue_style('main-style', get_theme_file_uri('/assets/redesign/css/style.min.css'), array(), $release_version);
        else:
            if (is_page_template('page-renovation-borodianka.php')):
                wp_enqueue_style('borodianka-style', get_theme_file_uri('/assets/borodianka/css/style.css'), array());
            elseif (is_page_template('page-irex.php')):
                wp_enqueue_style('irex-style', get_theme_file_uri('/assets/irex/css/style.css'), array());
            elseif (is_page_template('page-zigrii.php')):
                wp_enqueue_style('zigrii-style', get_theme_file_uri('/assets/zigrii/css/style.css'), array());
            else:
                wp_enqueue_style('dobrobat-style', get_theme_file_uri('/assets/css/style.min.css'), array());
            endif;
        endif;
    }

endif;
add_action('wp_enqueue_scripts', 'dobrobat_styles_setup');

add_filter('wp_enqueue_scripts', 'true_dequeue_gutenberg_styles', 999);
function true_dequeue_gutenberg_styles()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles'); // глобальные CSS-переменные
}

//STYLES connect end