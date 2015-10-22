var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var sourcemaps = require('gulp-sourcemaps');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('default', ['watch', 'build-css', 'build-js']);

gulp.task('watch', function() {
	gulp.watch('_scss/**/*.scss', ['build-css']);
});

gulp.task('watch', function() {
	gulp.watch('_js/**/*.js', ['build-js']);
});

gulp.task('build-css', function() {
	return sass('_scss/*', {style: 'compact'})
	    .pipe(sourcemaps.write())
	    .pipe(minifyCSS())
	    .pipe(gulp.dest('css'));
});

gulp.task('build-js', function() {
	return gulp.src([
		'_js/script.js'
	])    
	    .pipe(concat('scripts.min.js'))
	    .pipe(uglify())
	    .pipe(gulp.dest('js'));
});