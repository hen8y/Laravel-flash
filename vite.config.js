import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/flash.css',
                'resources/js/flash.js',
            ],
            refresh: true,
        }),
    ]
});
