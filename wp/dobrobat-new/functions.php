<?php

/**
 * dobrobat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dobrobat
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dobrobat_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on dobrobat, use a find and replace
        * to change 'dobrobat' to the name of your theme in all the template files.
        */
    load_theme_textdomain('dobrobat', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu' => esc_html__('Primary', 'dobrobat'),
            'menu-footer' => esc_html__('Меню Footer', 'dobrobat'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
//            'search-form',
//            'comment-form',
//            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'dobrobat_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'dobrobat_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dobrobat_content_width()
{
    $GLOBALS['content_width'] = apply_filters('dobrobat_content_width', 640);
}

add_action('after_setup_theme', 'dobrobat_content_width', 0);
add_action('after_setup_theme', 'dobrobat_add_image_size');
function dobrobat_add_image_size()
{
    add_image_size('dobrobat_news_thumb', 375, 270, false);
    add_image_size('dobrobat_celebrity', 260, 270, false);
    add_image_size('dobrobat_team', 300, 300, false);
    add_image_size('dobrobat_partners', 300, 150, false);
    add_image_size('dobrobat_400', 400, 400, false);
    add_image_size('dobrobat_600', 600, 600, false);
    add_image_size('dobrobat_legion', 360, 360, false);
    add_image_size('dobrobat_legion_prev', 100, 100, false);
    add_image_size('legion_flag', 56, 56, false);
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


/**
 * Enqueue scripts and styles.
 */


add_action('wp_ajax_create_ads', 'create_ads'); // Logged-in users
add_action('wp_ajax_nopriv_create_ads', 'create_ads'); // Guest users

add_action('wp_footer', 'ai_scripts');
function ai_scripts()
{
    ?>
    <script type="text/javascript">var eco_ai_body = document.body;
        var eco_ai_script = document.createElement('script');
        eco_ai_script.type = 'text/javascript';
        eco_ai_script.src = 'https://chat-intellect.com/chat/widgets/14/aab3238922bcc25a6f606eb525ffdc56.js';
        eco_ai_script.async = true;
        eco_ai_body.appendChild(eco_ai_script);</script>
    <?php

}

add_action('init', 'remove_editor');
function trim_text_to($text, $value)
{
    $trimmed_text = mb_substr($text, 0, $value);
    if (strlen($text) > $value) {
        $trimmed_text .= '...';
    }
    return $trimmed_text;
}

function remove_editor()
{
    remove_post_type_support('heroes', 'editor');
}

function create_ads()
{
    // global $current_user;
    // $firstname = $current_user->user_firstname;
    // $lastname = $current_user->user_lastname;

    $token = "5275518058:AAGxIjsv-3wuch0CT4d9AFAoQjd4HvWgu3o";


    $chat_id = "-1001530863499";


    $name = $_POST['name'];
    $tel = $_POST['phone'];
    $mail = $_POST['email'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $info = $_POST['info'];
    $materials = $_POST['materials'];
    $types = $_POST['types'];
    $profession = $_POST['professions'];

    $imagesToAds = array();
    if (isset($_FILES['file_1'])) {
        $img_1 = $_FILES['file_1'];
        $attach_id_img_1 = save_image_get_id($img_1);


        array_push($imagesToAds, $attach_id_img_1);
    }

    if (isset($_FILES['file_2'])) {
        $img_2 = $_FILES['file_2'];
        $attach_id_img_2 = save_image_get_id($img_2);

        array_push($imagesToAds, $attach_id_img_2);
    }

    if (isset($_FILES['file_3'])) {
        $img_3 = $_FILES['file_3'];
        $attach_id_img_3 = save_image_get_id($img_3);


        array_push($imagesToAds, $attach_id_img_3);
    }

    if (isset($_FILES['file_4'])) {
        $img_4 = $_FILES['file_4'];
        $attach_id_img_4 = save_image_get_id($img_4);


        array_push($imagesToAds, $attach_id_img_4);
    }

    if (isset($_FILES['file_5'])) {
        $img_5 = $_FILES['file_5'];
        $attach_id_img_5 = save_image_get_id($img_5);


        array_push($imagesToAds, $attach_id_img_5);
    }

    $post_data = array(
        'post_title' => $info,
        'post_content' => $info,
        'post_status' => 'pending ',
        "post_type" => "ads"
    );


    // Вст}авляем данные в БД
    $post_id = wp_insert_post(wp_slash($post_data));
    $field_name = "name";
    $value_name = $name;
    update_field($field_name, $value_name, $post_id);
    // $field_author = "author";
    // $value_author = $lastname . ' ' . $firstname;
    // update_field($field_author, 	$value_author, $post_id);
    $field_category = "tel";
    $value_category = $tel;
    update_field($field_category, $value_category, $post_id);

    $field_category = "mail";
    $value_category = $mail;
    update_field($field_category, $value_category, $post_id);

    $field_region = "region";
    $value_region = $region;
    update_field($field_region, $value_region, $post_id);


    $field_city = "city";
    $value_city = $city;
    update_field($field_city, $value_city, $post_id);

    $field_materials = "materials";
    $value_materials = $materials;
    update_field($field_materials, $value_materials, $post_id);

    $field_profession = "profession";
    $value_profession = $profession;
    update_field($field_profession, $value_profession, $post_id);


    $field_types = "types";
    $value_types = $types;
    update_field($field_types, $value_types, $post_id);


    $txt = '';

    foreach ($imagesToAds as $key => $id) {
        $fieldName = 'photo-' . $key;
        update_field($fieldName, $id, $post_id);
    }
    foreach ($imagesToAds as $id) {
        $url = wp_get_attachment_image_url($id);
        $txt .= $url . "%0A";
    }


    // 	return $url;

    fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

    exit; // This is required to end AJAX requests properly.
}

function upload_file($uploadedfile)
{
    if (!function_exists('wp_handle_upload')) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
    }

    $overrides = array(
        'test_form' => false,
    );
    $movefile = wp_handle_upload($uploadedfile, $overrides);

    if ($movefile && !isset($movefile['error'])) {
        return $movefile['url'];
    } else {

        return $movefile['error'];
    }
}


function save_image_get_id($file)
{


    $image_url = upload_file($file);

    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);

    $filename = basename($image_url);

    if (wp_mkdir_p($upload_dir['path'])) {
        $file = $upload_dir['path'] . '/' . $filename;
    } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
    }

    file_put_contents($filename, $file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null);

    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );

    $attach_id = wp_insert_attachment($attachment, $file);
    return $attach_id;
}


// Fire AJAX action for both logged in and non-logged in users
// add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
require_once('inc/core/javascript.php');
require_once('inc/core/styles.php');

require_once('inc/core/core.php');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require_once(get_template_directory() . '/inc/get_ajax_posts.php');
require_once(get_template_directory() . '/inc/get_ajax_news.php');
require_once(get_template_directory() . '/inc/get_ajax_press.php');
require_once(get_template_directory() . '/inc/get_ajax_objects.php');

require_once(get_template_directory() . '/inc/get_ajax_team.php');
require_once(get_template_directory() . '/inc/get_ajax_partners.php');
require_once(get_template_directory() . '/inc/get_ajax_abas.php');
function dn_get_image_attachment($id, $thumb = 'medium', $alt = '', $className = '')
{
    return wp_get_attachment_image($id, $thumb, false, ['alt' => $alt, 'class' => $className]);
}

function get_img_link($imgName)
{
    $path = get_template_directory_uri();
    return "$path/assets/borodianka/img/$imgName";
}

function get_img_link_all($imgName)
{
    $path = get_template_directory_uri();
    return "$path/assets/img/$imgName";
}

function get_picture_img($imgName, $alt = '', $classes = '')
{
    $className = $classes ?? '';
    $className .= ' lazy-image';
    $image = get_img_link($imgName);
    return "    <picture>
    <source data-srcset = '$image.webp' type = 'image/webp' >
    <img class='$className' data-src = '$image.png' alt = '$alt' >
    </picture >";
}

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function truncateString($string, $length = 30, $append = '...')
{
    if (mb_strlen($string) > $length) {
        return mb_strimwidth($string, 0, $length, $append);
    }
    return $string;
}
