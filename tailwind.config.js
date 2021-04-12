// a small workaround in order to get VS Code Tailwincss intellisense to work
let mode;
if (process.env.NODE_ENV != '') {
  mode = 'jit';
}

module.exports = {
  mode,
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