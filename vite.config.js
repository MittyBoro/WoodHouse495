import { defineConfig } from 'vite'

import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    require('autoprefixer'),
    require('tailwindcss'),
    laravel({
      input: ['resources/panel/js/app.js'],
      refresh: true,
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),
  ],
  server: {
    hmr: {
      host: 'localhost',
    },
  },
  resolve: {
    alias: {
      '@': '/resources/admin/js',
      '~': '/resources/js',
      ziggy: '/vendor/tightenco/ziggy/dist/vue.m',
    },
    extensions: ['.mjs', '.js', '.ts', '.jsx', '.tsx', '.json', '.vue'],
  },
})
