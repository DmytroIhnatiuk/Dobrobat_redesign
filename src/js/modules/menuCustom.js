import { getElement, getElements } from '../core/index.js'
import { removeActive } from '../core/classesEvents.js'

export default function initMenus() {
	if (!getElement('.menu-container') && window.innerWidth > 992) return

	getElements('.menu-container').forEach(menuItem => {
		const menuButtons = Array.from(getElements('.menu__button', menuItem))
		const menuContents = Array.from(getElements('.menu__content', menuItem))
		const menuContentsWrapper = getElement('.menu-contents', menuItem) // Блок з класом menu-contents

		initializeMenus()

		menuButtons.forEach((button, index) => {
			button.addEventListener('click', () => handleMenuClick(index))
		})

		menuContents.forEach((content, index) => {
			const closeButton = getElement('.menu__content-close', content)
			if (closeButton) {
				closeButton.addEventListener('click', () => closeMenu(index))
			}
		})

		function handleMenuClick(index) {
			if (menuButtons[index].classList.contains('active')) {
				closeMenu(index)
			} else {
				showMenu(index)
			}
		}

		function closeMenu(index) {
			menuButtons[index].classList.remove('active')
			menuContents[index]?.classList.remove('active')
			if (menuContentsWrapper) {
				menuContentsWrapper.classList.remove('active')
			}
		}

		function initializeMenus() {
			if (window.innerWidth < 640) {
				removeActive(menuButtons)
				removeActive(menuContents)
				if (menuContentsWrapper) {
					menuContentsWrapper.classList.remove('active')
				}
			} else {
				showMenu(0)
			}
		}

		function showMenu(index) {
			removeActive(menuButtons)
			removeActive(menuContents)
			menuButtons[index].classList.add('active')
			menuContents[index]?.classList.add('active')
			if (menuContentsWrapper) {
				menuContentsWrapper.classList.add('active')
			}
		}
	})
}
