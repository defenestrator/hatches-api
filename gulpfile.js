"use strict"
var // declare ALL THE THINGS
gulp = require('gulp'),
behat = require('gulp-behat'),
phpUnit = require('gulp-phpunit'),
phpSpec = require('gulp-phpspec'),
less = require('gulp-less'),
path = require('path'),
wait = require('gulp-wait'),
minifyCSS = require('gulp-minify-css');

gulp.task('less', function () {
    gulp.src('./resources/assets/less/*.less') // path to your main less file
        .pipe(less({
            paths: [path.join()] // @import paths
        }))
        .pipe(minifyCSS())
        .pipe(gulp.dest('./public/css')); // your output folder
});

gulp.task('css-compile-minify', function () {
    gulp.src('./resources/assets/less/*.less') // path to your main less file
        .pipe(less({
            paths: [ path.join() ] // @import paths
        }))
        .pipe(minifyCSS())
        .pipe(gulp.dest('./public/css')); // your output folder
});

gulp.task('behat', function() {
    var options = {debug: false};
    gulp.src('./features/**/*.php').pipe(behat('./vendor/bin/behat',options));
});

gulp.task('phpspec', function() {
    var opt = {runTests: 'run'};
    gulp.src('./tests/**/*.php').pipe(phpSpec('./vendor/bin/phpspec run -v',opt));
});

gulp.task('phpunit', function() {
    var opt = null;
    gulp.src('./spec/**/*.php')
        .pipe(phpUnit('./vendor/bin/phpunit',opt));
});

gulp.task('watch', function() {
    gulp.watch('./resources/assets/less/*.less', ['less']);
});

gulp.task('test', ['phpunit', 'phpspec', 'behat']);

gulp.task('default', ['less', 'css-compile-minify', 'phpunit', 'phpspec', 'behat']);

