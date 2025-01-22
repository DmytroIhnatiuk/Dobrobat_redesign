import Swiper from 'swiper'
import {Navigation, Thumbs} from 'swiper/modules'
import {getElement} from '../core/index.js'


function aboutUsSliderNav() {
    if (!getElement('[data-swiper="aboutUsSliderNav"]')) return

    return new Swiper('[data-swiper="aboutUsSliderNav"]', {
        modules: [Navigation],
        spaceBetween: 24,
        slidesPerView: 2,
        allowTouchMove: false,
        initialSlide: 1,
        slideToClickedSlide: true,
        on: {
            slideChange: function () {
                const slides = this.slides;
                slides.forEach((slide, index) => {
                    if (index === this.activeIndex) {
                        slide.classList.add('swiper-slide-hidden');
                    } else {
                        slide.classList.remove('swiper-slide-hidden');
                    }
                });
            },
        }
    })
}

function aboutUsSlider() {
    const mainSlider = getElement('[data-swiper="aboutUsSlider"]');
    if (!mainSlider) return;
    const mainSlides = mainSlider.querySelectorAll('.swiper-slide');
    const isEven = mainSlides.length % 2 === 0;
    const emptySlidesCount = isEven ? 1 : 2;
    const swiperWrapper = getElement('[data-swiper="aboutUsSliderNav"] .swiper-wrapper');
    for (let i = 0; i < emptySlidesCount; i++) {
        const emptySlide = document.createElement('div');
        emptySlide.classList.add('swiper-slide', 'swiper-slide-empty');
        swiperWrapper.append(emptySlide);
    }
    const swiperNav = aboutUsSliderNav();
    new Swiper('[data-swiper="aboutUsSlider"]', {
        modules: [Navigation, Thumbs],
        spaceBetween: 32,
        slidesPerView: 1,
        thumbs: {
            swiper: aboutUsSliderNav(),
        },
        navigation: {
            nextEl: '.aboutUsSlid-next',
            prevEl: '.aboutUsSlid-prev',
        },
        on: {
            slideChange: function () {
                // Сдвиг навигационного слайдера при переключении основного
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
    aboutUsSliderNav,
    newsSlider,
    volunteersSlider,
    ourTeamSlider,
}
