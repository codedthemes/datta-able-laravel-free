var gulp = require('gulp'), // main
    sass = require('gulp-sass'), // scss compiler
    concat = require('gulp-concat'), // merge two files
    uglify = require('gulp-uglify'), // minify js files
    rename = require('gulp-rename'), // rename files
    cssmin = require('gulp-cssmin'), // minify css files
    merge = require('merge-stream'), // mearge two task
    gulpSequence = require('gulp-sequence'), //  execute multiple task
    babel = require("gulp-babel"), // convert next generation JavaScript, today.
    smushit = require('gulp-smushit'), // image optimizer
    autoprefixer = require('gulp-autoprefixer'), // css propertys autoprefixer
    cssbeautify = require('gulp-cssbeautify'), // css cssbeautify
    fileinclude = require('gulp-file-include'), // include html files
    browsersync = require("browser-sync"), // browser reload
    htmlmin = require('gulp-htmlmin'); // html minify

//  [ scss compiler ] start
gulp.task('sass', function() {
    // main style css
    var maincss = gulp.src('resources/assets/scss/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css'))

    // layout style css
    var layoutcss = gulp.src('resources/assets/scss/partials/layouts/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css/layouts'))

    // Extra pages style css
    var pagescss = gulp.src('resources/assets/scss/partials/pages/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css/pages'))

    return merge(maincss, layoutcss, pagescss);
})
//  [ scss compiler ] end

//  [ Copy assets ] start
gulp.task('build', function() {
    var cpyassets = gulp.src(['resources/assets/**/*.*', '!resources/assets/scss/**/*.*'])
        .pipe(gulp.dest('public/assets'));
    var cpyextpage = gulp.src('resources/views/html/extra-pages/**/*.*')
        .pipe(gulp.dest('public/extra-pages'));
    var cpydoc = gulp.src('resources/views/doc/*.*')
        .pipe(gulp.dest('public/doc'));
    return merge(cpyassets, cpyextpage, cpydoc);
});
//  [ Copy assets ] end

//  [ build js ] start
gulp.task('build-js', function() {
    var layoutjs = gulp.src('resources/assets/js/*.js')
        .pipe(gulp.dest('public/assets/js'))

    var pagesjs = gulp.src('resources/assets/js/pages/*.js')
        .pipe(gulp.dest('public/assets/js/pages'))

    return merge(layoutjs, pagesjs);
})
//  [ build js ] end

//  [ scss compiler ] start
gulp.task('mincss', function() {
    // main style css
    var maincss = gulp.src('resources/assets/scss/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css'))
        .pipe(cssmin())
        .pipe(gulp.dest('public/assets/css'))

    // layout style css
    var layoutcss = gulp.src('resources/assets/scss/partials/layouts/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css/layouts'))
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('public/assets/css/layouts'))

    // Extra pages style css
    var pagescss = gulp.src('resources/assets/scss/partials/pages/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssbeautify())
        .pipe(gulp.dest('public/assets/css/pages'))
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('public/assets/css/pages'))
    return merge(maincss, layoutcss, pagescss);
})
//  [ scss compiler ] end

//  [ uglify js ] start
gulp.task('uglify', function() {
    var layoutjs = gulp.src('resources/assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js'))

    var pagesjs = gulp.src('resources/assets/js/pages/*.js')
        .pipe(babel())
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js/pages'))

    return merge(layoutjs, pagesjs);
})
//  [ uglify js ] end

//  [ image optimizer ] start
gulp.task('imgmin', function() {
    return gulp.src('resources/assets/img/**/*.{jpg,png}')
        .pipe(smushit())
        .pipe(gulp.dest('public/assets/img'));
});
//  [ image optimizer ] end

//  [ watch ] start
gulp.task('watch', function() {
    gulp.watch('resources/assets/scss/**/*.scss', gulp.series('sass')).on('change', browsersync.reload);
    gulp.watch('resources/assets/js/**/*.js', gulp.series('build-js')).on('change', browsersync.reload);
    gulp.watch('resources/views/html/**/*.html', gulp.series('build-html')).on('change', browsersync.reload);
    gulp.watch('resources/views/doc/**/*.html', gulp.series('build')).on('change', browsersync.reload);
})
//  [ watch ] start

//  [ browser reload ] start
gulp.task("browserSync", function() {
    browsersync.init({
        server: "public/"
    });
});
//  [ browser reload ] end

//  [ Default task ] start
const compile = gulp.parallel('browserSync', 'watch');
gulp.task(
    'default',
    gulp.series(
        'build',
        'sass',
        'build-js',
        'imgmin',
        compile
    )
)
//  [ Default task ] end

//  [ Build-Production task ] start
gulp.task(
    'prod-build',
    gulp.series(
        'build',
        'sass',
        'build-js',
        'imgmin'
    )
)
//  [ Build-Production task ] end

//  [ watch minify ] start
gulp.task('watch-minify', function() {
    gulp.watch('resources/assets/scss/**/*.scss', gulp.series('mincss')).on('change', browsersync.reload);
    gulp.watch('resources/assets/js/**/*.js', gulp.series('uglify')).on('change', browsersync.reload);
    gulp.watch('resources/views/html/**/*.html', gulp.series('htmlmin')).on('change', browsersync.reload);
    gulp.watch('resources/views/doc/**/*.html', gulp.series('build')).on('change', browsersync.reload);
})
//  [ watch minify ] start
