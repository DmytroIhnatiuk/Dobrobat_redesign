/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{html,htm,js}'],
	theme: {

		container: {
			padding: 'var(--container-gap)',
			center: true,
			screens: {
				sm: '100%',
				md: '100%',
				lg: '100%',
				xl: '100%',
			},
		},
		fontFamily: {
			body: 'Manrope',
		},
		spacing: {
			0: '0',
			2: '.02rem',
			4: '.04rem',
			6: '.06rem',
			8: '.08rem',
			10: '.1rem',
			12: '.12rem',
			14: '.14rem',
			16: '.16rem',
			18: '.18rem',
			20: '.2rem',
			24: '.24rem',
			26: '.26rem',
			32: '.32rem',
			36: '.36rem',
			40: '.4rem',
			50: '.5rem',
			100: '1rem',
		},
		borderWidth: {
			DEFAULT: '1px',
			2: '2px',
			0: '0px',
		},
		extend: {
			fontSize: {
				s: 'var(--txt-s)',
				m: 'var(--txt-m)',
				l: 'var(--txt-l)',
			},
			lineHeight: {},
			colors: {
				black: 'var(--black)',
				white: 'var(--white)',
				yellow: 'var(--yellow)',
				bg: 'var(--bg)',
				gray: 'var(--gray)',
				'light-gray': 'var(--light-gray)',
				'soft-white': 'var(--soft-white)',
				red: 'var(--red)',
			},

			borderRadius: {
				DEFAULT: '50%',
				16: '.16rem',
				24: '0.24rem',
				30: '0.3rem',
			},
		},
	},
	plugins: [
		function ({ addUtilities }) {
			addUtilities({
				'.flex-center': {
					display: 'flex',
					'align-items': 'center',
					'justify-content': 'center',
				},
			})
		},
	],
}
