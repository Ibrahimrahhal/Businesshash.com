var gulp = require('gulp');
var importCss = require("gulp-cssimport");
var postcss      = require('gulp-postcss');

function cssloop(paths){
paths.forEach((path)=>{
  gulp.src(__dirname+path.input)
      .pipe(importCss({skipComments:false}))
      .pipe(gulp.dest(__dirname+path.output));



});



}
gulp.task('default', () =>{
  var paths =[
    {input:"/css/main.css"     , output:"/css/done"},
    {input:"/css/main_md.css"     , output:"/css/done"},
    {input:"/css/main_sm.css"     , output:"/css/done"},
    {input:"/blog/css/lg.css"     , output:"/blog/css/done/"},
    {input:"/blog/css/md.css"     , output:"/blog/css/done/"}
  ];
  cssloop(paths);
  console.log(__dirname);
}
);
