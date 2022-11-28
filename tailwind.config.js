/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
	],
	theme: {
		extend: {
			fontFamily: {
				title: ['Sora', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
			},
			screens: {
				'nav-1': '540px',
				'nav-2': '850px',
			},
			gridTemplateColumns: {
				'fill': 'repeat(auto-fill, clamp(288px, 90% ,312px))',
				'teachers': '1fr, 320px',
				'nav': 'repeat(auto-fill, minmax(150px, 1fr))',
			},
			minWidth: {
				'clamp': 'clamp(280px, 90%, 440px)',
				'clamp-lg': 'clamp(440px, 90%, 800px)',
			},
			maxWidth: {
				'1.5xl': '39rem',
			},
			transitionProperty: {
				'height': 'height',
				'spacing': 'margin, padding',
			}
		},
	},
	plugins: [],
}
