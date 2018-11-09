var gulp = require('gulp');
var importCss = require('gulp-import-css');
var autoprefixer = require('gulp-autoprefixer');
var paths =[
  {input:"../css/main.css"     , output:"../css/maindone.css"},
  {input:"../css/main_md.css"     , output:"../css/main_mddone.css"}
  // ,{input:     , output:},
  // {input:     , output:}
];
function cssloop(paths){
paths.forEach((path)=>{
  gulp.src(path.input)
      .pipe(importCss())
      .pipe(autoprefixer({
          cascade: false
      }))
      .pipe(gulp.dest(path.output));



});



}
gulp.task('default', () =>{
  cssloop(paths);
}
);
