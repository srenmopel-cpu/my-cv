import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/navbar.css',
                'resources/css/home.css',
                'resources/css/education.css',
                'resources/css/experience.css',
                'resources/css/skills.css',
                'resources/css/contact.css',
                'resources/css/services.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
