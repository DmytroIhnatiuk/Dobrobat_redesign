import { removeActive } from '../core/classesEvents.js'
import { getElement, getElements } from '../core/index.js'

export default function dropdown() {
	if (!getElement('.dropdown')) return

	getElements('.dropdown').forEach(dropdown => {
		const activeItem = dropdown.querySelector('.dropdown__active')
		const dropdownItems = dropdown.querySelectorAll('.dropdown__item')

		if (dropdownItems.length > 0) {
			const firstItem = dropdownItems[0]
			firstItem.classList.add('active')
			activeItem.innerHTML = firstItem.innerHTML
			activeItem.dataset.selected = firstItem.innerHTML
		}

		if (screen.availWidth <= 1024) {
			const dropdownBtn = dropdown.querySelector('.dropdown__btn')
			if (dropdownBtn) {
				dropdownBtn.addEventListener('click', () => {
					dropdown.classList.toggle('active')
				})
			}
		}

		dropdownItems.forEach(dropdownItem => {
			dropdownItem.addEventListener('click', () => {
				removeActive(dropdownItems)
				dropdownItem.classList.add('active')
				activeItem.innerHTML = dropdownItem.innerHTML
				activeItem.dataset.selected = dropdownItem.innerHTML
				if (dropdown.classList.contains('active'))
					dropdown.classList.remove('active')
			})
		})
	})
}
