module.exports = {
  purge: [
    './resources/*.blade.php',
    './resources/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        'curious-blue':{
          DEFAULT:"#2386c9",
          "900":"#0b2257"
        },
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
