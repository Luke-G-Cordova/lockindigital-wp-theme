/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', './assets/js/**/*.js'],
  theme: {
    extend: {
      colors: {
        primaryYellow: '#FFCF3F',
        primaryGrey: '#2C3E50',
        primaryBlue: '#005792',
      },
    },
    screens: {
      sm: '768px',
      md: '1024px',
      lg: '1280px',
      xl: '1536px',
    },
  },
  plugins: [],
};
