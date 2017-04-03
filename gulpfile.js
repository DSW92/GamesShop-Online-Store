// Modules
var gulp = require('gulp');
var sass = require('gulp-sass');
// var sassGlob = require('gulp-sass-glob');
var sourcemaps = require('gulp-sourcemaps');

// Controls
var stylesPath = './**/css/*.scss';
var destPath = '';
var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

// Tasks
gulp.task('sass', function(){
  return gulp.src(stylesPath)
    .pipe(sourcemaps.init())
    // .pipe(sassGlob())
    .pipe(sass(sassOptions))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(destPath));
});

gulp.task('watch', ['sass'], function(){
  gulp.watch(stylesPath, ['sass']);
});
