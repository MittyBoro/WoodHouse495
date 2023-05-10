const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/panel/**/*.js',
    './resources/panel/**/*.vue',
    './resources/panel/**/favicon.svg',
  ],

  theme: {
    colors: {
      cyan: colors.cyan,
      sky: colors.sky,

      transparent: 'transparent',
      current: 'currentColor',

      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      orange: colors.orange,
      yellow: colors.yellow,
      green: colors.emerald,
      blue: colors.blue,
      indigo: colors.indigo,
      violet: colors.violet,
      purple: colors.purple,
      fuchsia: colors.fuchsia,
      pink: colors.pink,

      primary: colors.lime,

      secondary: colors.zinc,
    },
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
    },
  },

  variants: {
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
    extend: {
      backgroundColor: ['even'],
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
