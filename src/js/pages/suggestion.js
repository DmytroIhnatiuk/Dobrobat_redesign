import accordion from '../modules/accordion.js'
import dropdown from '../modules/dropdown.js'
import { suggestionsSlider, suggestionsSliderNav } from '../modules/sliders.js'

window.addEventListener('DOMContentLoaded', () => {
	try {
		accordion('.accordion', '.accordion-header', '.accordion-content')
		dropdown()
		suggestionsSliderNav()
		suggestionsSlider()
	} catch (e) {
		console.log(e)
	}
})
