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
mix.webpackConfig({
    stats: {
        hash: true,
        version: true,
        timings: true,
        children: true,
        errors: true,
        errorDetails: true,
        warnings: true,
        chunks: true,
        modules: false,
        reasons: true,
        source: true,
        publicPath: true,
    }
});

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/homepage.js', 'public/js');
mix.copy('resources/css/colors.css', 'public/css');
mix.copy('resources/sitemap.xml', 'public');
mix.copyDirectory('resources/images', 'public/images');
mix.copy('resources/canvas/demos/restaurant/images/sketch-header.png', 'public/canvas/css/images');
mix.copyDirectory('resources/canvas', 'public/canvas');

mix.styles([
    'public/canvas/css/bootstrap.css',
    'public/canvas/style.css',
    'public/canvas/css/dark.css',
    'public/canvas/css/font-icons.css',
    'public/canvas/css/animate.css',
    'public/canvas/css/magnific-popup.css',
    'public/canvas/css/swiper.css',
    'public/canvas/one-page/css/et-line.css',
    'public/canvas/demos/restaurant/restaurant.css',
    'public/canvas/demos/restaurant/css/fonts.css'
], 'public/canvas/css/app.css');
