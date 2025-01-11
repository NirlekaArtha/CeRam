/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        background: "#1D1819",
        accent_1: "#EF1F1F",
        accent_1_dark: "#490505",
        accent_2: "#208484",
        white: "#EFEFEF",
        black: "000000",
      },
      fontFamily: {
        creepster: "Creepster",
        inknut: "Inknut Antiqua",
        inter: "Inter",
        nosifer: "Nosifer",
        mochiy: "Mochiy Pop One",
      }
    },
  },
  plugins: [],
}

