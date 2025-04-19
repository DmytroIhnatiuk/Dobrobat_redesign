<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trailer
 */
global $IS_NEW;
$IS_NEW = get_field('isNew_design', get_the_ID());
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5X8CVWZ');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C4RNPCPL5M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-C4RNPCPL5M');
    </script>
    <!-- End Google Tag Manager -->


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-225028190-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-225028190-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php if (!is_front_page()) : ?>
        <title><?php the_title(); ?> || "Добробат"</title>
        <meta name="title" content="<?php the_title(); ?>">
        <meta name="description" content="<?php bloginfo('name') ?>">
    <?php else : ?>
        <title><?php bloginfo('name') ?></title>
        <meta name="title" content="<?php bloginfo('name') ?>">
        <meta name="description" content="<?php bloginfo('name') ?>">

    <?php endif; ?>

    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-touch-icon.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/favicon-16x16.png' ?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/site.webmanifest' ?>">
    <link rel="mask-icon"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/safari-pinned-tab.svg' ?>"
          color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php if ($IS_NEW): ?>
        <link
                href="https://fonts.googleapis.com/css?family=Manrope:regular,500,600,700&display=swap"
                rel="stylesheet"
        />
    <?php else: ?>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">

    <?php endif; ?>

    <meta name="facebook-domain-verification" content="838dk6tdrsbb0yageep3567hggfm95"/>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3081092065485470');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=3081092065485470&ev=PageView&noscript=1"/></noscript>
    <!-- End Meta Pixel Code -->
    <?php wp_head(); ?>
    <script>
        <?php $isEn = get_locale();  ?>;
        const lang = `<?php echo $isEn ?>`;

        const isEn = lang === 'en' ? true : false;

        let path = `<?php echo get_template_directory_uri() ?>`;
        let ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";

        <?php if (is_page(1030) || is_page(1056) || is_singular('objects')) : ?>
        let objects = <?php echo get_ajax_objects(); ?>;
        <?php endif; ?>

        <?php if (is_page(20)) : ?>
        let posts = <?php echo get_ajax_posts(); ?>
        <?php endif; ?>
        <?php if (is_page(1032) || is_page(4346) ) : ?>
            let
        news = <?php echo get_ajax_news(); ?>
        <?php endif; ?>
        <?php if (is_page(1058) || is_page(2704)) : ?>
            let
        press = <?php echo get_ajax_press(); ?>;
        if (isEn) {
            press = press.filter(item => item.isEn == '1');
        }
        <?php endif; ?>
    </script>


</head>
<?php $bodyClasses = '';
if (is_page_template('page-renovation-borodianka.php')) {
    $bodyClasses .= ' font-body font-medium text-m bg-[#FFFCF0] text-black  ';
} else if (is_page_template('page-irex.php')) {
    $bodyClasses .= 'font-body font-medium text-m bg-irex-gradient text-black   ';
} else {
    $bodyClasses .= ' body font-body  ';
}

?>
<body class="<?= $bodyClasses; ?>">
<?php //body_class('body'); ?>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5X8CVWZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<?php $pageClasses = '';
if (is_page_template('page-reconstructionAcademy.php')) {
    $pageClasses .= ' page-container__academy academy ';
} else if (is_page_template('page-renovation-borodianka.php')) {
    $pageClasses .= ' min-h-screen flex flex-col overflow-x-clip ';
} else if (is_page_template('page-irex.php')) {
    $pageClasses .= ' min-h-screen flex flex-col overflow-x-clip irex-page p ';
} else {
    $pageClasses .= ' page-container ';
}

?>
<div class="<?= $pageClasses; ?>">
    <?php if ($IS_NEW): ?>
        <header
                class="header !fixed top-0 ring-0 left-0 pt-8 sm:pt-16 w-full z-[100] transition-transform duration-300"
        >
            <div class="container">
                <div
                        class="h-[var(--header-height)] rounded-24 box__shadow px-8 sm:px-32 py-8 sm:py-18 bg-white flex items-center justify-between text-s min-w-full box__shadow"
                >
                    <a href="<?php echo get_home_url(); ?>">
                        <svg class="h-50 w-50 sm:w-[1.88rem]">
                            <use href="#logo"></use>
                        </svg>
                    </a>
                    <?php if (is_front_page()): ?>
                        <?= get_template_part('template-parts/new/main-page-header'); ?>

                    <?php endif; ?>
                    <?php if (is_page_template('page-team.php')): ?>
                        <?= get_template_part('template-parts/new/team-header'); ?>

                    <?php endif; ?>
                </div>
                <div
                        class="menu absolute top-32 sm:top-[.6rem] right-[var(--container-gap)] left-[var(--container-gap)] lg:left-auto -z-10 overflow-hidden"
                >
                    <div
                            class="lg:w-[7.5rem] w-full sm:h-auto rounded-b-24 overflow-hidden bg-bg px-32 sm:px-[.74rem] pb-24 pt-[.9rem] sm:py-[.9rem] sm:flex text-l menu-container relative"
                    >
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menu',
                            'menu_class' => 'sm:w-1/2 w-full sm:mr-24   menu-buttons flex-shrink-0 h-[4.5rem] sm:h-auto z-10',
                            'container' => false,
                            'walker' => new Header_Walker_Nav_Menu()
                        )); ?>
                        <?php if (1 !== 1): ?>
                            <ul
                                    class="sm:w-1/2 w-full sm:mr-24 menu-buttons flex-shrink-0 h-[4.5rem] sm:h-auto z-10"
                            >
                                <?php if (1 !== 1): ?>
                                    <li
                                            class="mb-24 last:mb-0 menu-link transition-colors active menu__button"
                                    >
                                        <a class="flex justify-between items-center" href="#">
                                            <span class="mr-8">Про нас </span>
                                            <span>
								<svg class="size-16 fill-black">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <li class="mb-24 last:mb-0 menu-link transition-colors menu__button">
                                    <a class="flex justify-between items-center" href="/projects/">
                                        <span class="mr-8">Проекти</span>
                                    </a>
                                </li>
                                <li class="mb-24 last:mb-0 menu-link transition-colors menu__button">
                                    <a class="flex justify-between items-center" href="#">
                                        <span class="mr-8">Потребують відновлення</span>
                                        <span>
								<svg class="size-16 fill-black">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                    </a>
                                </li>
                                <li class="mb-24 last:mb-0 menu-link transition-colors menu__button">
                                    <a class="flex justify-between items-center" href="/news/">
                                        <span class="mr-8"><?php pll_e('Новини'); ?></span>
                                        <span>
								<svg class="size-16 fill-black">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                    </a>
                                </li>

                                <li class="mb-24 last:mb-0 menu-link transition-colors menu__button">
                                    <a class="flex justify-between items-center" href="#">
                                        <span class="mr-8">Зворотній зв'язок</span>
                                        <span>
								<svg class="size-16 fill-black">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- start -->
                            <div
                                    class="menu-contents sm:border-l border-solid border-gray text-m sm:relative absolute top-0 ring-0 left-0 sm:w-1/2 w-full h-5/6 sm:h-auto"
                            >
                                <div
                                        class="menu__content pl-32 pr-32 pt-[.9rem] sm:pt-0 sm:pl-[.7rem] absolute top-0 ring-0 left-0 h-full w-full"
                                >
                                    <div
                                            class="pb-16 mb-24 border-b border-gray border-solid transition-colors active menu__content-close flex items-center sm:hidden"
                                    >
							<span>
								<svg class="size-16 fill-black !rotate-[225deg] mr-24">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                        <span class="mr-8">Про нас </span>
                                    </div>
                                    <ul>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Команда проєкту</a>
                                        </li>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Волонтери</a>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                        class="menu__content pl-32 pr-32 pt-[.9rem] sm:pt-0 sm:pl-[.7rem] absolute top-0 ring-0 left-0 h-full w-full"
                                >
                                    <div
                                            class="pb-16 mb-24 border-b border-gray border-solid transition-colors active menu__content-close flex items-center sm:hidden"
                                    >
							<span>
								<svg class="size-16 fill-black !rotate-[225deg] mr-24">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                        <span class="mr-8">Проекти </span>
                                    </div>
                                </div>
                                <div
                                        class="menu__content pl-32 pr-32 pt-[.9rem] sm:pt-0 sm:pl-[.7rem] absolute top-0 ring-0 left-0 h-full w-full"
                                >
                                    <div
                                            class="pb-16 mb-24 border-b border-gray border-solid transition-colors active menu__content-close flex items-center sm:hidden"
                                    >
							<span>
								<svg class="size-16 fill-black !rotate-[225deg] mr-24">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                        <span class="mr-8">Потребують відновлення </span>
                                    </div>
                                    <ul>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Команда проєкту</a>
                                        </li>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Волонтери</a>
                                        </li>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Команда проєкту</a>
                                        </li>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Волонтери</a>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                        class="menu__content pl-32 pr-32 pt-[.9rem] sm:pt-0 sm:pl-[.7rem] absolute top-0 ring-0 left-0 h-full w-full"
                                >
                                    <div
                                            class="pb-16 mb-24 border-b border-gray border-solid transition-colors active menu__content-close flex items-center sm:hidden"
                                    >
							<span>
								<svg class="size-16 fill-black !rotate-[225deg] mr-24">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                        <span class="mr-8">Новини </span>
                                    </div>
                                    <ul>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Команда проєкту</a>
                                        </li>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Волонтери</a>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                        class="menu__content pl-32 pr-32 pt-[.9rem] sm:pt-0 sm:pl-[.7rem] absolute top-0 ring-0 left-0 h-full w-full"
                                >
                                    <div
                                            class="pb-16 mb-24 border-b border-gray border-solid transition-colors active menu__content-close flex items-center sm:hidden"
                                    >
							<span>
								<svg class="size-16 fill-black !rotate-[225deg] mr-24">
									<use href="#btn-arrow-icon"></use>
								</svg>
							</span>
                                        <span class="mr-8">Зворотній зв'язок </span>
                                    </div>
                                    <ul>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="/team">Команда проєкту</a>
                                        </li>
                                        <li
                                                class="mb-16 last:mb-0 menu-link transition-colors menu__button"
                                        >
                                            <a href="#">Волонтери</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div
                                class="dynamic-btns flex w-max sm:absolute bottom-16 right-32 ml-auto lg:hidden"
                        ></div>
                    </div>
                </div>
            </div>
        </header>
    <?php else: ?>
        <?php if (is_page_template('page-renovation-borodianka.php')): ?>
            <?= get_template_part('template-parts/header-borodianka'); ?>
        <?php elseif (is_page_template('page-irex.php')): ?>
            <?= get_template_part('template-parts/header-irex'); ?>
        <?php elseif (is_page_template('page-zigrii.php')): ?>
            <?= get_template_part('template-parts/header-zigrii'); ?>
        <?php else: ?>
            <?= get_template_part('template-parts/main-header'); ?>
        <?php endif; ?>
    <?php endif; ?>


