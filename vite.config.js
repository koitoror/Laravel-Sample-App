import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
        css: {
            preprocessorOptions: {
              scss: {
                additionalData: `
                  @import "./src/styles/_animations.scss";
                  @import "./src/styles/_variables.scss";
                  @import "./src/styles/_mixins.scss";
                  @import "./src/styles/_helpers.scss";
                `
              }
            }
          },
        // sass('resources/sass/app.scss', 'public/css'),
        // sourceMaps()
    ],
    css: {
        preprocessorOptions: {
          scss: {
            additionalData: `
              @import "./resources/sass/app.scss";
              @import "./resources/sass/_variables.scss";

            `
          }
        }
      }
});
