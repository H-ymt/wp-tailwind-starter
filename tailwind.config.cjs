/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./assets/**/*.js", "./assets/*.js"],
  theme: {
    extend: {
      colors: {
        primary: "rgb(var(--color-primary))",
      },
    },
  },
  plugins: [],
}
