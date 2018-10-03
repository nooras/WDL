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

mix.js("resources/assets/js/app.js","public/js")
	.js("resources/assets/js/app.js","public/js")
	.js("resources/assets/js/jquery-3.3.1.min.js","public/js")
	.js("resources/assets/js/misc.js","public/js")
	.js("resources/assets/js/validate.js","public/js")
 	.copy("resources/assets/css/style.css", "public/css")
 	.copy("resources/assets/img","public/img");