const gulp = require("gulp");
const sass = require('gulp-sass')(require('sass'));


gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass()) // Converter o Sass em CSS
    .pipe(gulp.dest('src/css'));
});

gulp.task('watch', function(){
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'],['sass']);
});

gulp.task('default' ['sass', 'watch']);
