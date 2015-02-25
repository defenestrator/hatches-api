"use strict"

var elixir = require('laravel-elixir');
require('laravel-elixir-behat');

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



elixir(function (mix) {
    mix.behat();
    mix.phpUnit();
    mix.phpSpec();
});


//gulp.task('behat', function() {
//    var options = {debug: false};
//    gulp.src('./features/**/*.php').pipe(behat('./vendor/bin/behat',options));
//});
//
//gulp.task('default', ['behat', 'elixir']);