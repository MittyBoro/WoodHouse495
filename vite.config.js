import { defineConfig } from 'vite'
import { ViteImageOptimizer } from 'vite-plugin-image-optimizer'

import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    require('autoprefixer'),
    require('tailwindcss'),
    laravel({
      input: [
        'resources/frontend/sass/style.scss',
        'resources/frontend/js/app.js',
        'resources/panel/js/app.js',
      ],
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
    ViteImageOptimizer({
      /* pass your config */
    }),
  ],
  server: {
    hmr: {
      host: 'localhost',
    },
  },
  resolve: {
    alias: {
      '@': '/resources/panel/js',
      '~': '/resources/js',
      ziggy: '/vendor/tightenco/ziggy/dist/vue.m',
    },
  },
})
