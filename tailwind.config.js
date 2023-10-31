/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        "Poppins" :['"Poppins"', 'sans-serif']
      },
      colors:{
        //'negro-menu': '#5C5470',
        //'negro-menu': '#0882C4',
        'login-fondo': '#3882F2',
        'negro-menu': '#0C4069',
         'negro-fondo': '#0D4572',
         'secundario': '#29bcb2',
         'fuente-botones': '#D1D5DB',
         'active':'#2CC9BF',
         'principal':'#0F2C40',
         'fuente':'#D1D5DB',
         'rojo':'#EF4444',
         'menu':'#141414',
         'terciario':"#0B3B61",
         "color-borde":"#0B3B61",
         //"color-borde":"#113147",
      }
    },
  },
  plugins: [],
}

/*
         //'negro-menu': '#5C5470',
        'negro-menu': '#484258',
         'negro-fondo': '#352F44',
         'secundario': '#29bcb2',
         'fuente-botones': '#171717',
         'active':'#2CC9BF',
         'principal':'#eeeeee',
         'fuente':'#D1D5DB',
         'rojo':'#EF4444',
         'menu':'#141414',
         'terciario':"#2D283A",
*/