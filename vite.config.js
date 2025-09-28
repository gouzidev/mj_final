import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/article.css',
                'resources/css/custom.css',
                'resources/css/document.css',
                'resources/js/app.js',
                'resources/js/slider.js',
                'resources/js/document_slider.js',
                'resources/js/navbar.js',
                'resources/js/animateOnScroll.js'
            ],
            refresh: true,
        }),
    ],
});
