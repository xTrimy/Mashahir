module.exports = {
  purge: [
    './resources/*.blade.php',
    './resources/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        'curious-blue':"#2386c9",
      }
    },
  },
  variants: {
    extend: {},
  },
plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}
