import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
// import fs from 'fs';

const host = 'http://127.0.0.1:8001';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        host,
        hmr: { host },
        https: {
            key: fs.readFileSync(`/Users/mariamalandejani/Library/Application Support/Herd/config/valet/Certificates/${host}.key`),
            cert: fs.readFileSync(`/Users/mariamalandejani/Library/Application Support/Herd/config/valet/Certificates/${host}.crt`),
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
