import Swiper from 'swiper'
import { Navigation, Thumbs } from 'swiper/modules'
import { getElement } from '../core/index.js'

let aboutUsSliderNavInstance // Для зберігання екземпляра навігаційного слайдера

function aboutUsSliderNav() {
	if (!getElement('[data-swiper="aboutUsSliderNav"]')) return

	aboutUsSliderNavInstance = new Swiper('[data-swiper="aboutUsSliderNav"]', {
		modules: [Navigation],
		spaceBetween: 24,
		slidesPerView: 2,
	})
}

function aboutUsSlider() {
	if (!getElement('[data-swiper="aboutUsSlider"]')) return

	new Swiper('[data-swiper="aboutUsSlider"]', {
		modules: [Navigation, Thumbs],
		spaceBetween: 32,
		slidesPerView: 1,
		thumbs: {
			swiper: aboutUsSliderNavInstance, // Використання екземпляра
		},
		navigation: {
			nextEl: '.aboutUsSlid-next',
			prevEl: '.aboutUsSlid-prev',
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
function ourТeamSlider() {
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
	ourТeamSlider,
}
