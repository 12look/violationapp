var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
var paths = {
	'jquery': 'vendor/bower_dl/jquery/',
    'bootstrap': 'vendor/bower_dl/bootstrap-sass/assets/'
}

elixir(function(mix) {
     mix.sass("style.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
     	.styles(['app.css', 'style.css'],
    			'public/css/all.css',
    			'public/css')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .scripts([
            paths.jquery + "dist/jquery.js",
            paths.bootstrap + "javascripts/bootstrap.min.js"
        ], 'public/js/app.js', './');
});