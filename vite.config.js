import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
            'resources/js/app.js','resources/css/componentes.css',
            'resources/css/menu.css','resources/css/lightbox.min.css',
            'resources/css/photoswipe.css','resources/css/dropzone.css','resources/css/loader.css',
            'resources/css/fondo.css',
            'resources/css/personas/personas.css','resources/css/sweetalert2.min.css'],
            refresh: true,
        }),
    ],
});
