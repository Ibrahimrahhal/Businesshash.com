var gulp = require('gulp');
var importCss = require("gulp-cssimport");
var postcss      = require('gulp-postcss');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');

function cssloop(paths){
paths.forEach((path)=>{
  gulp.src(__dirname+path.input)
      .pipe(importCss({skipComments:false}))
    //   .pipe(cleanCSS({debug: true}, (details) => {
    //   console.log(`${details.name}: ${details.stats.originalSize}`);
    //   console.log(`${details.name}: ${details.stats.minifiedSize}`);
    // }))
      .pipe(gulp.dest(__dirname+path.output));

//
// gulp.src(__dirname+path.input)
//           .pipe(autoprefixer({
//                     browsers: ['last 2 versions'],
//                     cascade: false
//                   }))
//                   .pipe(gulp.dest(__dirname+path.output));


});



}
gulp.task('default', () =>{
  var paths =[
    {input:"/css/main.css"     , output:"/css/done"},
    {input:"/css/main_md.css"     , output:"/css/done"},
    {input:"/css/main_sm.css"     , output:"/css/done"},
    {input:"/blog/css/lg.css"     , output:"/blog/css/done/"},
    {input:"/blog/css/md.css"     , output:"/blog/css/done/"},
    {input:"/blog/css/sm.css"     , output:"/blog/css/done/"},
    {input:"/blog/css/blog/sm.css"     , output:"/blog/css/blog/done/"},
    {input:"/blog/css/blog/md.css"     , output:"/blog/css/blog/done/"},
    {input:"/blog/css/blog/lg.css"     , output:"/blog/css/blog/done/"},
    {input:"/Cata/css/lg.css"     , output:"/Cata/css/done"},
    {input:"/Cata/css/md.css"     , output:"/Cata/css/done"},
    {input:"/Cata/css/sm.css"     , output:"/Cata/css/done"},


  ];
  cssloop(paths);
  console.log(__dirname);
}
);
