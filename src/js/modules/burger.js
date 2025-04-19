import {header} from '../core/elementsNodeList.js'
import {disableScroll, disableScrollAndSwipes, enableScroll, enableScrollAndSwipes} from '../core/index.js'

const burger = () => {
    if (header) {
        const burger = header.querySelector('.burger');
        const menu = document.querySelector('.menu');
        const body = document.body
        const nav = header.querySelector('.nav-menu');

        if (burger && menu && body) {
            burger.addEventListener('click', () => {
                if (burger.classList.contains('active')) {
                    enableScroll();
                    setTimeout(() => {
                        burger.classList.remove('active')
                        menu.classList.remove('active')
                        body.classList.remove('active')
                        if (nav){
                            nav.classList.remove('pointer-events-none')
                            nav.classList.remove('opacity-50')
                        }
                    }, 100)
                } else {
                    disableScroll();
                    burger.classList.add('active')
                    menu.classList.add('active')
                    body.classList.add('active')
                    if (nav){
                        nav.classList.add('pointer-events-none')
                        nav.classList.add('opacity-50')
                    }
                }
            })
        } else {
            console.error('Element not found: burger, menu, or body')
        }
    } else {
        console.error('Element not found: header')
    }
}

export default burger
