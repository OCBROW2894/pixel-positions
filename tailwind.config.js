/** @type {import('tailwindcss').Config} */
export default {
    content: [
        /*These are files we want Tailwind To inspect for utility classes
        This way the compiled css classes is as small as it can be
         */
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
  theme: {
    extend: {
        colors:{
            "black": "#060606"
        }
    },
  },
  plugins: [],
}

