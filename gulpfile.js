var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

    gulp.task('default', function() {
      // place code for your default task here
    });

    gulp.task('connect-sync', function() {
      connect.server({}, function (){
        browserSync({
          proxy: 'tk:8888'
        });
      });

      gulp.watch('**/*.php').on('change', function () {
        browserSync.reload();
      });
    });
