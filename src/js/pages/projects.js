import dropdown from '../modules/dropdown.js'

import { partnersSlider } from '../modules/sliders.js'

window.addEventListener('DOMContentLoaded', () => {
	try {
		dropdown()
		partnersSlider()
	} catch (e) {
		console.log(e)
	}
})
