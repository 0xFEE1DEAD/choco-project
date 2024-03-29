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

mix.js('resources/js/appv1.32.js', 'public/js')
    .vue({ runtimeOnly: (process.env.NODE_ENV || 'production') === 'production' })
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
