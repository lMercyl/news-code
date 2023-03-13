const mix = require('laravel-mix');

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
if (mix.inProduction()) {
    mix.version();
}

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/new.scss', 'public/css/style.css')
    .sass('resources/sass/media.scss', 'public/css/style.css');
