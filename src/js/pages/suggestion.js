import dropdown from '../modules/dropdown.js'
import { suggestionsSlider, suggestionsSliderNav } from '../modules/sliders.js'

window.addEventListener('DOMContentLoaded', () => {
	try {
		dropdown()
		suggestionsSliderNav()
		suggestionsSlider()
	} catch (e) {
		console.log(e)
	}
})
