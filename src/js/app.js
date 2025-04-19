import './libs/dynamic_adapt.js'
import * as flsFunctions from './core/functions.js'
import {scrollToAnchor} from './modules/scrollToAnchor.js'
import {headerFixed} from './modules/index.js'
import burger from './modules/burger.js'
import initMenus from './modules/menuCustom.js';
import Marquee from 'vanilla-marquee'
// import '../scss/tailwind/index.scss'
// import 'swiper/css'
// import 'swiper/css/navigation'
// import 'swiper/css/thumbs'
import '../scss/style.scss'
import {getElements} from "./core/index.js";


/* Перевірка підтримки webp, додавання класу webp або no-webp для HTML */
/* (i) необхідно для коректного відображення webp із css */
flsFunctions.isWebp()
/* Додавання класу touch для HTML якщо браузер мобільний */
flsFunctions.addTouchClass()
/* Додавання loaded для HTML після повного завантаження сторінки */
// flsFunctions.addLoadedClass();

/* Враховування плаваючої панелі на мобільних пристроях при 100vh */
flsFunctions.fullVHfix()

// Ліниве (відкладене) завантаження картинок
// Документація по роботі у шаблоні: https://template.fls.guru/template-docs/modul-lenivaya-podgruzka-lazy-loading.html
// Документація плагіна: https://github.com/verlok/vanilla-lazyload
// Сніппет(HTML):
// import './files/scroll/lazyload.js';
getElements('.marquee').forEach(element => {
    new Marquee(element, {
        startVisible: true,
        duplicated: true,
        gap: 0,
        speed: 100,
    })
})
window.addEventListener('DOMContentLoaded', () => {
    try {
        scrollToAnchor()
        headerFixed()
        burger()
        initMenus()
    } catch (e) {
        console.log(e)
    }
})

function updateViewBox() {
    const svgElement = document.getElementById('logo')
    const screenWidth = window.innerWidth

    if (screenWidth >= 640) {
        svgElement.setAttribute('viewBox', '0 0 18624.8 5000')
    } else {
        svgElement.setAttribute('viewBox', '0 0 5000 5000')
    }
}

updateViewBox()

window.addEventListener('resize', updateViewBox)


