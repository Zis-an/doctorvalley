import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/backend.css',
                'resources/js/backend.js',
            ],
            refresh: true,
        }),
        vue({
            template:{
                transformAssetUrls:{
                    base: null,
                    includeAbsolute: false
                }
            }
        })
    ],
    server:{
        watch:{
            usePolling: true,
        },
        host: '0.0.0.0',
        hmr:{
            host: 'localhost'
        },
        strictPort: true,
        port: parseInt(process.env.VITE_PUBLISH_PORT||'5173'),
    }
});
