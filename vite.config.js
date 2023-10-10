import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/sass/app/entry.scss', 'resources/assets/js/app/entry.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~style_app': path.resolve(__dirname, 'resources/assets/sass/app/'),
            '~js_app': path.resolve(__dirname, 'resources/assets/js/app/'),
        },
    },
    server: {
        host: true,
        hmr: {
            host: 'localhost',
        },
        watch: {
          usePolling: true,
        },
    },
});
