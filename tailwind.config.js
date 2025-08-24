/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/wireui/**/*.blade.php", // <- necesario para WireUI
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
