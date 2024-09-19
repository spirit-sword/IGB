/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      lineHeight: {
        '0': '0',
        '1': '1',
        '2': '2',
      }
    },
    fontFamily: {
    },
  },
  plugins: [],
}