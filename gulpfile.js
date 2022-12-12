
"use strict";

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const twig = require('gulp-twig');
const data = require('gulp-data');
const yaml = require('gulp-yaml');
const fs = require('fs');

gulp.task('style', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass({includePaths: ['node_modules'], outputStyle: 'expanded'}))
        .pipe(gulp.dest('./www'));
});

// Compile Twig templates to HTML
gulp.task('templates', function() {
    return gulp.src(['./templates/**/*.twig', '!templates/_*.twig', '!templates/base.html.twig'], { dot: true })
        .pipe(data(function(file) {
            return JSON.parse(fs.readFileSync('./data/set.json'));
        }))
        .pipe(twig({
            errorLogToConsole: true,
            extname: false,
            filters: [
                {
                    name: "u",
                    func: function (args) {
                        return args.codePointAt(0).toString(16).padStart(4, '0');
                    }
                }
            ]
        }))
        .pipe(gulp.dest('./www')); // output the rendered files to the "dist" directory
});

gulp.task('default', gulp.series('style', 'templates'));
