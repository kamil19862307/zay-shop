import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                //
                // 'public/assets/css/bootstrap.min.css',
                // 'public/assets/css/custom.css',
                // 'public/assets/css/fontawesome.css',
                // 'public/assets/css/fontawesome.min.css',
                // 'public/assets/css/slick.min.css',
                // 'public/assets/css/slick-theme.css',
                // 'public/assets/css/slick-theme.min.css',
                // 'public/assets/css/templatemo.css',
                // 'public/assets/css/templatemo.min.css',
                //
                // 'public/assets/js/bootstrap.bundle.min.js',
                // 'public/assets/js/custom.js',
                // 'public/assets/js/jquery-1.11.0.min.js',
                // 'public/assets/js/jquery-migrate-1.2.1.min.js',
                // 'public/assets/js/slick.min.js',
                // 'public/assets/js/templatemo.js',
                // 'public/assets/js/templatemo.min.js',


            ],
            refresh: true,
        }),
    ],
});
