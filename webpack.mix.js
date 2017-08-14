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

mix
	.js('resources/assets/js/app.js', 'public/js');
	// .styles([
	// 		'resources/assets/explorer-1.0.0/html/assets/libraries/slick/slick.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/libraries/slick/slick-theme.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/css/trackpad-scroll-emulator.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/css/chartist.min.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/css/jquery.raty.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/fonts/font-awesome/css/font-awesome.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/css/nouislider.min.css',
	// 		'resources/assets/explorer-1.0.0/html/assets/css/explorer-orange.css',
	// 		'resources/assets/css/override.css',
	// 	], 'public/css/vendor.css')
	// .scripts([
	// 	'resources/assets/explorer-1.0.0/html/assets/js/jquery.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/tether.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/bootstrap.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/chartist.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/google-map-richmarker.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/google-map-infobox.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/google-map-markerclusterer.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/google-map.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/jquery.trackpad-scroll-emulator.min.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/jquery.inlinesvg.min.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/jquery.affix.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/jquery.scrollTo.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/libraries/slick/slick.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/nouislider.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/jquery.raty.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/wNumb.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/particles.min.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/explorer.js',
	// 	'resources/assets/explorer-1.0.0/html/assets/js/explorer-map-search.js',
	// ], 'public/js/vendor.js');
   // .sass('resources/assets/sass/app.scss', 'public/css');
