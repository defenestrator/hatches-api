"use strict"
var gulp = require('gulp');
var behat = require('gulp-behat');
var phpUnit = require('gulp-phpunit');
var phpSpec = require('gulp-phpspec');
var wait = require('gulp-wait');
//var elixir = require('laravel-elixir');
//require('laravel-elixir-behat');


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

//elixir(function (mix) {
//    mix.behat();
//    mix.phpUnit();
//    mix.phpSpec();
//});


gulp.task('behat', function() {
    var options = {debug: false};
    gulp.src('./features/**/*.php').pipe(behat('./vendor/bin/behat',options)).pipe();
});

gulp.task('phpspec', function() {
    var opt = {runTests: 'run'};
    gulp.src('./tests/**/*.php').pipe(phpSpec('./vendor/bin/phpspec run -v',opt)).pipe();
});

gulp.task('phpunit', function() {
    var opt = null;
    gulp.src('./spec/**/*.php')
        .pipe(phpUnit('./vendor/bin/phpunit',opt))
        .pipe();
});
gulp.task('test', ['phpunit', 'phpspec', 'behat']);
gulp.task('default', ['phpUnit', 'phpSpec', 'behat']);
