/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    colors: {
      lightBlue: "#6A9AF8",
      lightGray: "#7E7E7E",
      lightPurple: "#C76CD7"
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}