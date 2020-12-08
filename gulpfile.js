var gulp = require('gulp');
var exec = require('child_process').exec;

gulp.task('tests', async function() {
  exec('vendor/bin/phpunit Tests --colors=always', function(error, stdout) {
    console.log(stdout);
  });
});

function defaultTask(cb) {
  // place code for your default task here
  cb();
}

exports.default = defaultTask

//TODO Crear gulp install