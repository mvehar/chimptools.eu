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

mix.sass('public/assets/css/bootstrap.scss', 'public/assets/css/bootstrap.css').sass('public/assets/css/style.scss', 'public/assets/css/style.css');

mix.js('resources/js/bootstrap.js', 'public/js').js('resources/js/app.js', 'public/js').
    sass('resources/sass/app.scss', 'public/css');

