let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/libs.js', 'public/js')
    .js('resources/assets/js/app.js', 'public/js')
    .copy('resources/assets/js/theme', 'public/js/theme')
    .copy('resources/assets/js/libs', 'public/js/libs')
    .copy('resources/assets/js/dashboard', 'public/js/dashboard')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/themeCss/fullcalendar.bundle.css',
        'resources/assets/themeCss/jquery-ui.bundle.css',
        'resources/assets/themeCss/jqvmap.bundle.css',
        'resources/assets/themeCss/style.bundle.css',
        'resources/assets/themeCss/vendors.bundle.css',
    ], 'public/css/themeCss.css')
    .copy('resources/assets/themeCss/fonts', 'public/css/fonts');


