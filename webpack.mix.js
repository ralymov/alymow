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

const config = require('./webpack.config.js');
mix.webpackConfig(config);
mix.options({
  processCssUrls: false
});

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/style.scss', 'public/css');

if (mix.inProduction()) {
  mix.version();
}
