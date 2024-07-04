/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        '3xl': '0 2px 5px 0 gray',
        'inner-custom': 'inset 0 1px 3px 1px silver',
      },
      backgroundImage: {
        'login-bg': "url('/public/tl.png')",
      },
      borderWidth :{
        'border-b-2' : '1px solid black',
      },
    },
  },
  plugins: 
  [],
}
