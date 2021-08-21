const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/*.blade.php',
    './resources/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily:{
      'sans':['RB','Helvetica','Arial','sans-serif'],
    },
    ...colors,
    extend: {
      colors:{
        rose:colors.rose,
        'curious-blue':{
          DEFAULT:"#2386c9",
          "900":"#0b2257"
        },
      },
      borderWidth: {
       '12': '12px',
       '16': '16px',
      }
      
    },
  },
  variants: {
    extend: {
      display: ['group-hover'],
    },
  },
plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
