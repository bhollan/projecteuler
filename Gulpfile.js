/**
 * Created by brianh on 28/03/17.
 */
var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
var run = require('gulp-run');
var notify = require('gulp-notify');

gulp.task('test', function() {
    gulp.src('test/*.php')
        // .pipe(run('clear'))
        //'', { notify: true }
        .pipe(phpunit())
        .on('error', function(){})
        //     notify.onError({
        //     title: 'Dangit',
        //     message: 'Your tests failed!',
        //     icon: __dirname + '/fail.png'
        // }))
        // .pipe(notify({
        //     title: 'Success',
        //     message: 'All tests have returned green!',
        //     onLast: true
        // }));
});

gulp.task('watch', function() {
    gulp.watch(['test/**/*.php', 'src/**/*.php'], {debounceDelay: 2000}, ['test']);
});

gulp.task('default', ['test', 'watch']);