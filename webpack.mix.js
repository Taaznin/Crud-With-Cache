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

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
	'public/assets/libs/flot/css/float-chart.css',
	'public/dist/css/style.min.css'
	],'public/compiled/compiled.css');

mix.scripts([
	'public/assets/libs/jquery/dist/jquery.min.js',
	'public/assets/libs/popper.js/dist/umd/popper.min.js',
	'public/assets/libs/bootstrap/dist/js/bootstrap.min.js',
	'public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
	'public/assets/extra-libs/sparkline/sparkline.js',
	'public/dist/js/waves.js',
	'public/dist/js/sidebarmenu.js',
	'public/dist/js/custom.min.js',
	'public/assets/libs/flot/excanvas.js',
	'public/assets/libs/flot/jquery.flot.js',
	'public/assets/libs/flot/jquery.flot.pie.js',
	'public/assets/libs/flot/jquery.flot.time.js',
	'public/assets/libs/flot/jquery.flot.stack.js',
	'public/assets/libs/flot/jquery.flot.crosshair.js',
	'public/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js',
	'public/dist/js/pages/chart/chart-page-init.js'
	],'public/compiled/compiled.js');

