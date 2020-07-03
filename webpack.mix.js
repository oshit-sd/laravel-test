const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'resources/js/assets/backend/css/AdminLTE.min.css',
    'resources/js/assets/backend/css/skins/_all-skins.min.css',
    'resources/js/assets/backend/css/bootstrap.min.css',
    'resources/js/assets/backend/css/style.css',
    'resources/js/assets/backend/css/responsive.css',
    'resources/js/assets/backend/css/color.css'
], 'public/css/all.css');