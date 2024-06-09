/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      fontFamily: {
        orbitron : ["Orbitron", "sans-serif"]
      },
    },
  },
  plugins: [],
}
