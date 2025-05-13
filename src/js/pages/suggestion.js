import accordion from '../modules/accordion.js'
import dropdown from '../modules/dropdown.js'
import {partnersSlider, suggestionsSlider, suggestionsSliderNav} from '../modules/sliders.js'

window.addEventListener('DOMContentLoaded', () => {
	try {
		accordion('.accordion', '.accordion-header', '.accordion-content')
		dropdown()
		suggestionsSliderNav()
		suggestionsSlider()
		const tabButtons = document.querySelectorAll('.tab-buttons button');
		const tabContents = document.querySelectorAll('.tab-content');
		const tabContainer = document.querySelector('.tab-contents');

		function setActiveTab(tabId) {
			// Remove active states
			tabButtons.forEach(btn => btn.classList.remove('active'));
			tabContents.forEach(content => content.classList.remove('active'));

			// Add active state to the selected tab and button
			document.querySelector(`.tab-buttons button[data-tab="${tabId}"]`).classList.add('active');
			const activeContent = document.querySelector(`.tab-content[data-tab="${tabId}"]`);
			activeContent.classList.add('active');

			// Adjust container height
			tabContainer.style.height = activeContent.offsetHeight + 'px';
		}

// Set initial height
		window.addEventListener('DOMContentLoaded', () => {
			const activeContent = document.querySelector('.tab-content.active');
			if (activeContent) {
				tabContainer.style.height = activeContent.offsetHeight + 'px';
			}
		});

// Event listeners
		tabButtons.forEach(btn => {
			btn.addEventListener('click', () => {
				const tabId = btn.getAttribute('data-tab');
				setActiveTab(tabId);
			});
		});
	} catch (e) {
		console.log(e)
	}
})
