import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss',
                    'resources/sass/booking.scss',
                    'resources/js/app.js',
                    'resources/js/board.js',
                    'resources/js/itineraries.js',
                    'resources/js/contact.js',
                    'resources/js/booking.js'
                   ],
            refresh: true,
        }),
    ],
});
