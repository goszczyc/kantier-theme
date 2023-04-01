/** @type {import('tailwindcss').Config} */
module.exports = {
	mode: "jit",
	content: [
		"./index.php",
		"./header.php",
		"./footer.php",
		"./functions.php",
		"./page-templates/**/*.php",
		"./template-parts/**/*.php",
		"./components/**/*.php",
		"./src/ts/**/*.ts"
	],
	theme: {
		extend: {
			transitionDelay: {
				'0': '0ms',
				'2000': '2000ms',
			},
			boxShadow: {
				'menu': '0 0 10px rgba(206, 206, 206, 0.8)',
				'image-l': '-20px 20px #f5f5f5',
				'image-r': '20px 20px #f5f5f5',
			},
			gridTemplateColumns: {
				'contact': 'repeat(auto-fit, minmax(160px, 250px))'
			},
			fontSize: {
				'2xs': ['0.625rem', '0.75rem']
			}
		},
		fontFamily: {
			'sans': ['open-sans', 'sans-serif'],
			'kranto': ['kranto-normal', 'sans-serif']
		},
		screens: {
			xs: "576px",
			sm: "768px",
			md: "992px",
			lg: "1200px",
			xl: "1400px",
			"2xl": "1600px",
		},
		container: {
			screens: {
				lg: "1440px",
			},
		},
		colors: {
			primary: "#e2051c",
			white: "#fefefe",
			"l-gray": "#f5f5f5",
			gray: "#9b9b9b",
			"d-gray": '#515151',
			'form-gray': '#bdbdbd',
			dark: "#1f1f1f",
			current: "currentColor",
			black: "#010101",
			transparent: "transparent"
		},
	},
	plugins: [
		require('@tailwindcss/typography'),
	],
};
