const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['InterVariable', ...defaultTheme.fontFamily.sans],  // Add InterVariable as the default sans font
        montserrat: ['Montserrat', 'sans-serif'],  // Add Montserrat
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'), // Add the Tailwind Forms plugin
  ],
};
