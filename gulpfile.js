var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var fs = require("file-system");
var rev = require('gulp-rev');

var PATH = {
  SRC: {
    SCSS: 'wp-content/themes/shipyard/library/scss',
    ROOT: 'wp-content/themes/shipyard/',
    IMG: 'wp-content/themes/shipyard/library/img',
    JS: 'wp-content/themes/shipyard/library/js'
  },
  DEST: {
    CSS: 'wp-content/themes/shipyard/library/css',
    IMG: 'wp-content/themes/shipyard/library/img',
    JS: 'wp-content/themes/shipyard/library/js'
  },
};


// SASS compiler
gulp.task('sass', function() {
  return sass(PATH.SRC.SCSS + '/**/*.scss')
    .on('error', sass.logError)
    .pipe(sourcemaps.init())
    .pipe(autoprefixer({
        browsers: ['last 3 versions'],
        cascade: false
     }))
    //.pipe(concat({path: 'style.css', cwd: ''}))
    //.pipe(rev())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(PATH.DEST.CSS))
    .pipe(reload({ stream:true }));
});

// watch Sass files for changes, run the Sass preprocessor with the 'sass' task and reload
gulp.task('serve', ['sass'], function() {
  browserSync({
    server: {
      baseDir: 'wp-content/themes/shipyard'
    }
  });

  gulp.watch(['wp-content/themes/shipyard*.html', 'wp-content/themes/shipyard/library/scss/**/*.scss',
  'wp-content/themes/shipyard/library/css/**/*.css', 'wp-content/themes/shipyard/library/**/*.js'],['sass'], reload);
});

//Image compression
gulp.task('images', () =>
    gulp.src(PATH.SRC.IMG + '**.*')
        .pipe(imagemin())
        .pipe(gulp.dest(PATH.DEST.IMG))
);

// Scripts
// -------
// combine all scripts into one file
// add min to filename
// write it to a new location
gulp.task('scripts', function() {
    gulp.src(PATH.SRC.JS + '**.*')
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(uglify())
        // .on('error', errorHandler)
        .pipe(rename({
            basename: "main",
            suffix: '.min',
            extname: ".js"
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(PATH.DEST.JS));

});

gulp.task('default', ['serve']);
