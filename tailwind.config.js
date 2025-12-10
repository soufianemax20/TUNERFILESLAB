/** 
 * Prerequisites: NPM/Webpack version 16 or higher
 * Run this script to process new CSS data: 
 * npx tailwindcss -i ./src/css/ctr-base.css -o ./public/css/ctr-public.min.css --watch
 */
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.{html,js,php}'
  ],
  theme: {
    fontSize: {
      xs: ['12px', '12px'],
      sm: ['14px', '20px'],
      base: ['16px', '24px'],
      lg: ['20px', '28px'],
      xl: ['28px', '36px'],
      xxl: ['48px', '38px'],
    },
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
      mobile: '320px',
      tablet: '481px',
      laptop: '769px',
      desktop: '1025px',
      tv: '1201px',
    },
    // colors: {
    //   'blue': '#1fb6ff',
    //   'purple': '#7e5bef',
    //   'pink': '#ff49db',
    //   'orange': '#ff7849',
    //   'green': '#13ce66',
    //   'yellow': '#ffc82c',
    //   'gray-dark': '#273444',
    //   'gray': '#8492a6',
    //   'gray-light': '#d3dce6',
    // },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  },

  plugins: [
    require('tw-elements/dist/plugin')
  ],

  prefix: 'ctr-',
}