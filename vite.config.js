import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/responsive.css', "resources/css/override.css", 'resources/css/style.css', 'resources/css/bootstrap.min.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
