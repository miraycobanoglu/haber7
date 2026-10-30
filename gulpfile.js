const sass = require('gulp-sass')(require('sass'));
const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();

function compileScss() {
    return gulp
        .src('scss/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('css'))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
}

function minifyJs() {
    return gulp
        .src(['js/**/*.js', '!js/**/*.min.js'])
        .pipe(sourcemaps.init())
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('js'))
        .pipe(browserSync.stream());
}

function watchFiles(done) {
    browserSync.init({
        proxy: "http://localhost:8888/HABER7",
        notify: false
    });

    gulp.watch('scss/**/*.scss', compileScss);
    gulp.watch(['js/**/*.js', '!js/**/*.min.js'], minifyJs);
    gulp.watch('*.php').on('change', browserSync.reload);

    done();
}

exports.default = gulp.series(
    gulp.parallel(compileScss, minifyJs),
    watchFiles
);
