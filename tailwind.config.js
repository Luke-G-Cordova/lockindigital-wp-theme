/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', './assets/js/**/*.js'],
  theme: {
    extend: {
      colors: {
        yellow: '#FFCF3F',
        graydark: '#2C3E50',
        blue: '#005792',
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
