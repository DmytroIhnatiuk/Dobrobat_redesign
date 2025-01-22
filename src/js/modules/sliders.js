import Swiper from 'swiper'
import {Navigation, Thumbs} from 'swiper/modules'
import {getElement} from '../core/index.js'

function getAboutUsSliderNav() {
    const navElement = getElement('[data-swiper="aboutUsSliderNav"]');
    return navElement ? new Swiper(navElement, {
        modules: [Navigation],
        spaceBetween: 24,
        slidesPerView: 2,
        initialSlide: 1,
        slideToClickedSlide: true,
        on: {
            slideChange: function () {
                this.slides.forEach((slide, index) => {
                    slide.classList.toggle('swiper-slide-hidden', index === this.activeIndex);
                });
            },
        }
    }) : null;
}

function createEmptySlides(slideCount) {
    const wrapper = getElement('[data-swiper="aboutUsSliderNav"] .swiper-wrapper');
    const emptySlides = [];
    const numSlides = slideCount % 2 === 0 ? 1 : 2;

    for (let i = 0; i < numSlides; i++) {
        const emptySlide = document.createElement('div');
        emptySlide.classList.add('swiper-slide', 'swiper-slide-empty');
        emptySlides.push(emptySlide);
    }

    wrapper.append(...emptySlides);
}

function aboutUsSlider() {
    const mainSlider = getElement('[data-swiper="aboutUsSlider"]');
    if (!mainSlider) return;
    const mainSlides = mainSlider.querySelectorAll('.swiper-slide');
    createEmptySlides(mainSlides.length);
    const swiperNav = getAboutUsSliderNav();
    new Swiper('[data-swiper="aboutUsSlider"]', {
        modules: [Navigation, Thumbs],
        spaceBetween: 32,
        slidesPerView: 1,
        thumbs: {
            swiper: swiperNav,
        },
        navigation: {
            nextEl: '.aboutUsSlid-next',
            prevEl: '.aboutUsSlid-prev',
        },
        on: {
            slideChange: function () {
                swiperNav.slideTo(this.activeIndex + 1);
            },
        },

    })
}

function newsSlider() {
    if (!getElement('[data-swiper="newsSlider"]')) return
    new Swiper('[data-swiper="newsSlider"]', {
        modules: [Navigation],
        spaceBetween: 24,
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
        },
        navigation: {
            nextEl: '.newsSlid-next',
            prevEl: '.newsSlid-prev',
        },
    })
}

function volunteersSlider() {
    if (!getElement('[data-swiper="volunteersSlider"]')) return
    new Swiper('[data-swiper="volunteersSlider"]', {
        modules: [Navigation],
        spaceBetween: 24,
        slidesPerView: 1,
        loop: true,
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
        },
        navigation: {
            nextEl: '.newsSlid-next',
            prevEl: '.newsSlid-prev',
        },
    })
}

function ourTeamSlider() {
    if (!getElement('[data-swiper="ourТeamSlider"]')) return
    new Swiper('[data-swiper="ourТeamSlider"]', {
        modules: [Navigation],
        spaceBetween: 24,
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
        },
        navigation: {
            nextEl: '.ourТeamSlider-next',
            prevEl: '.ourТeamSlider-prev',
        },
    })
}

export {
    aboutUsSlider,
    newsSlider,
    volunteersSlider,
    ourTeamSlider,
}
