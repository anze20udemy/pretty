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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([

    'resources/assets/css/libs/business-casual.css',
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/dropzone.css',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/sb-admin.css',
    'resources/assets/css/libs/style.css'


], 'public/css/libs.css');

mix.scripts([
    'resources/assets/js/libs/bootstrap.js',
    'resources/assets/js/libs/bootstrap.min.js',

    'resources/assets/js/libs/sb-admin-2.js',
    'resources/assets/js/libs/tinymce.min.js',
    'resources/assets/js/libs/script.js'


], 'public/js/libs.js');