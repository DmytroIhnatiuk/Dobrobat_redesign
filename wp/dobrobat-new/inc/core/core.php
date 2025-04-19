<?php
require_once('helpers.php');
require_once('image_sizes.php');
require_once('favicon.php');
require_once('options-page.php');
class Header_Walker_Nav_Menu extends Walker_Nav_Menu {
    private $current_item_title = '';

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        $output .= "\n$indent<div class=\"menu__content pl-32 pr-32  sm:pl-[.7rem] absolute top-[.9rem] ring-0 right-0 h-full w-full lg:w-1/2\">
<div  class='pb-16 mb-24 border-b border-gray border-solid trancition-colors active menu__content-close flex items-center sm:hidden'>
						<span><svg class='size-16 fill-black !rotate-[225deg] mr-24'><use href='#btn-arrow-icon'></use></svg>
						</span><span>" . esc_html($this->current_item_title) . " </span></div><ul>";
    }

    // Закриття рівня меню
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n</div>\n";
    }
    // Елемент меню
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $this->current_item_title = $item->title;

        if (in_array('menu-item-has-children', $classes)) {
            $output .= '<li class="mb-24 last:mb-0  submenu ">';
            $output .= '<div class="flex justify-between menu-link items-center menu__button">';
            $output .= '<span class="mr-8">' . $item->title . '</span>';
            $output .= '<span><svg class="size-16 fill-black transition-colors "><use href="#btn-arrow-icon"></use></svg></span>';
            $output .= '</div>';
        } else {
            $output .= '<li class="mb-24 last:mb-0   ">';
            $output .= '<a class="w-auto menu-link transition-colors " href="' . esc_attr($item->url) . '">' . $item->title . '</a>';
        }
    }

    // Закриваємо елемент
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}
class Footer_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        // Не потрібне вкладене меню у твоєму випадку, але можна додати якщо треба
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = 'mb-24 last:mb-0 hover:text-yellow transition-colors duration-300 w-max';
        $output .= '<li class="' . esc_attr($classes) . '">';
        $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= '</li>';
    }
}
function addZero($number) {
    if ($number > 0 && $number < 10) {
        return '0' . $number;
    }
    return (string)$number;
}
















