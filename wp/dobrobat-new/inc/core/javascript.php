<?php
if (!function_exists('dobrobat_scripts_setup')) :
    function dobrobat_scripts_setup()
    {
        $release_version = '1.0.5';
        if (get_field('isNew_design', get_the_ID())):
            wp_enqueue_script('new-main-scripts', get_theme_file_uri('/assets/redesign/js/app.min.js'), array(), $release_version);
            if (is_front_page()):
                wp_enqueue_script('home-scripts', get_theme_file_uri('/assets/redesign/js/home.min.js'), array(), $release_version);
            endif;
        else:
            if (is_page_template('page-renovation-borodianka.php')):
                wp_enqueue_script('borodianka-scripts', get_template_directory_uri() . '/assets/borodianka/js/app.min.js', array(), null, true);
            elseif (is_page_template('page-irex.php')):
                wp_enqueue_script('irex-scripts', get_template_directory_uri() . '/assets/irex/js/report.min.js', array(), null, true);
            elseif (is_page_template('page-zigrii.php')):
                wp_enqueue_script('zigrii-scripts', get_template_directory_uri() . '/assets/zigrii/js/zigrii.min.js', array(), null, true);
            else:
                wp_enqueue_script('dobrobat-scripts', get_template_directory_uri() . '/js/main.min.js', array(), null, true);

            endif;
        endif;
//        if (is_singular('services')) {
//            wp_enqueue_script('services-scripts', get_theme_file_uri('/assets/js/service.min.js'), array(), $release_version);
//        }
    }

endif;
add_action('wp_footer', 'dobrobat_scripts_setup');
function php_script()
{
    ?>
    <script defer>
        let path = '<?php echo get_template_directory_uri(); ?>';
        const ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}

// Добавляем хук для выполнения функции в head
//add_action('wp_head', 'php_script');.