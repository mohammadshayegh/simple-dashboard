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

mix.babel([
    'resources/js/app.js',
    'resources/js/main.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery-3.2.1.slim.min.js',
    'resources/js/popper.min.js'
], 'public/js/app.js');


mix.styles([
    'resources/css/register.css',
    'resources/css/main.css',
    'resources/css/bootstrap.min.css'
], 'public/css/app.css');
