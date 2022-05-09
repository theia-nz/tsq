const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js("resources/js/app.js", "public/js").postCss(
//     "resources/css/app.css",
//     "public/css",
//     [
//         //
//     ]
// );

mix.options({
    processCssUrls: false,
    postCss: [require("tailwindcss"), require("autoprefixer")],
});

mix.setPublicPath("public");

mix.sass("resources/sass/app.scss", "css");

mix.js("resources/js/alpine.js", "js");
mix.js("resources/js/google-maps.js", "js");
mix.js("resources/js/app.js", "js");

if (mix.inProduction()) {
    mix.version();
}

// mix.disableSuccessNotifications();
mix.disableNotifications();
