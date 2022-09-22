/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  theme: {
    screens: {
      sm: '428px',
      md: '896px',
      lg: '1200px',
      xl: '1440px',
    },
    extend: {},
  },
  plugins: [],
}
