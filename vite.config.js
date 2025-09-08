import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/login.css",
                "resources/css/system.css",
                "resources/css/create.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
