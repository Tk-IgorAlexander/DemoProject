var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts([
		'../bower/jquery/dist/jquery.min.js',
		'../bower/bootstrap/dist/js/bootstrap.js',
		'../bower/moment/min/moment.min.js',
		'../bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'
    ], 'public/js/vendor.js');

    mix.styles([
        '../bower/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'
    ], 'public/css/datetime.css');

    mix.version(['css/datetime.css', 'js/vendor.js']);


});
