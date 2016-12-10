// gulpfile.js
const
  gulp = require('gulp'),
  bundle = require('gulp-bundle-assets'),
  rename = require("gulp-rename"),
  cleaner = require('del');

const
  __public = './public/assets',
  __assets = './app/resources/assets',
  __config = __assets + '/config',
  paths = {
    js: [__assets + '/js/*'],
    css: [__assets + '/css/*']
  };

gulp.task('clean', function () {
  return cleaner([__public]);
});

gulp.task('fonts', function () {
  return gulp.src('./node_modules/font-awesome/fonts/**.*')
    .pipe(gulp.dest(__public + '/fonts'));
});

gulp.task('favicon', function () {
  return gulp.src(__assets + '/favicon/**.*')
    .pipe(gulp.dest(__public + '/favicon'));
});

gulp.task('css', function () {
  return gulp.src(__config + '/styles.bundle')
    .pipe(bundle())
    .pipe(rename('all.min.css'))
    .pipe(gulp.dest(__public + '/css'));
});

gulp.task('js', function () {
  return gulp.src(__config + '/scripts.bundle')
    .pipe(bundle())
    .pipe(rename('all.min.js'))
    .pipe(gulp.dest(__public + '/js'));
});

// Rerun the task when a file changes
gulp.task('watch', function () {
  gulp.watch(paths.css, ['css', 'js']);
  gulp.watch(paths.js, ['css', 'js']);
});

gulp.task('default', ['fonts', 'favicon', 'css', 'js']);