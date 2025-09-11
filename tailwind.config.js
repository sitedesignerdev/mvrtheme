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
    },
  },
  plugins: [],
}

