module.exports = {
  purge: [
    // Paths to your templates...
    "../**.php",
    "../**/**.php",
    "./src/js/**.js"
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    maxWidth: {
      '1280': '1280px',
      '1024': '1024px'
    },
    colors: {
      red: '#ff2a00',
      black: '#000',
      white: '#fff'
    },
    fontFamily: {
      'sans': '"Helvetica Neue", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
      'gtsuper': '"GT Super Text"'
    },
    extend: {
      height: {
        '125': '31.25rem'
      },
      borderWidth: {
        '1': '1px'
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
    
  ],
}
