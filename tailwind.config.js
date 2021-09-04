const colors = require('tailwindcss/colors')

module.exports = {
//   mode:'jit',
  purge: [
    './resources/*.blade.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily:{
      'sans':['RB','Helvetica','Arial','sans-serif'],
    },
    ...colors,
    extend: {
      zIndex: {
         '-10': '-10',
        },
      colors:{
        rose:colors.rose,
        'curious-blue':{
          DEFAULT:"#2386c9",
          "900":"#11193C",
          "200":"#4f9ed3",
        },
        'curious-red':{
            DEFAULT:"#941616",
        },
        'curious-yellow':{
            DEFAULT:"#b58403",
        },
        'curious-green':{
            DEFAULT:"#0d9467",
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
      display: ['group-hover','group-focus','focus-within','hover'],
    //   textColor: ['peer-checked'],
    },
  },
plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
