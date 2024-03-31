/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        Fredoka:["Fredoka", "sans-serif"],
        kode:[ "Kode Mono", "monospace"]
      }
    },
  },
  plugins: [],
}