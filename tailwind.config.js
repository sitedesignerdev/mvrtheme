/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './template-parts/**/*.php',
    './page-template/**/*.php',
    './inc/**/*.php',
    './src/js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        primary: '#00558D',
        accent: '#fed310',
      },
      fontFamily: {
        sans: ['Montserrat', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

