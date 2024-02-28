import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/flash.css',
                'resources/js/flash.js',
            ],
            output: {
                css: 'public/dist/css/flash.css', // Specify the output file path for CSS
                js: 'public/dist/js/flash.js' // Specify the output file path for JavaScript
            },
            refresh: true,
        }),
    ]
});
