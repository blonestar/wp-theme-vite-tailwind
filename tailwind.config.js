module.exports = {
  mode: 'jit',
  purge: [
    '../**/*.php',
    'safelist.txt',
    //'../**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: []
} 