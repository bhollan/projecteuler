/**
 * Created by brianh on 28/03/17.
 */
var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
var run = require('gulp-run');
var notify = require('gulp-notify');

gulp.task('test', function() {
    gulp.src('spec/*.php')
        .pipe(run('clear'))
        .pipe(phpunit('', { notify: true }))
        .on('error', notify.onError({
            title: 'Dangit',
            message: 'Your tests failed!',
            icon: __dirname + '/fail.png'
        }))
        .pipe(notify({
            title: 'Success',
            message: 'All tests have returned green!'
        }));
});

gulp.task('watch', function() {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);