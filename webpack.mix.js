const { mix } = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

    mix.scripts([
        'resources/assets/js/jquery.js',
        'resources/assets/js/jquery.main.js',
        'resources/assets/js/plugins.js'
    ], 'public/js/wecode.min.js');



    mix.styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/fonts-icons.css',
        'resources/assets/css/plugin-resets.css',
        'resources/assets/css/responsive.css',
        'resources/assets/css/color.css',
        'resources/assets/css/style.css'
    ], 'public/css/wecode.min.css');
