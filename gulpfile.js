var gulp = require('gulp');
var exec = require('gulp-exec');
var sys = require('sys');
var child_process = require('child_process').exec;

///////////////////////////////// ASSETS /////////////////////////////////
// publish views auth
gulp.task('pviewsa', function() {
    var options = {
        silent: false
    };
    gulp.src('')
        .pipe(exec('php artisan view:publish --path=workbench/jacopo/laravel-authentication-acl/src/views/ jacopo/authentication', options) );
});
// publish assets auth
gulp.task('passetsa', function() {
    var options = {
        silent: false
    };
    gulp.src('')
        .pipe(exec('php artisan asset:publish --bench=jacopo/laravel-authentication-acl', options) );
});

gulp.task('assets', ['passetsa','pviewsa']);