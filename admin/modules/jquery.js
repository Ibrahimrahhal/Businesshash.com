$(function(){

/////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
$(".Dashboard-btn").click(function(){
  if(!($(".Dashboard").hasClass("active"))){
console.log($(".Dashboard-btn").hasClass("active"));
$(".active").effect("drop",200);
$(".active").toggleClass("active");
setTimeout(function(){
$(".Dashboard").show("slide",200);
$(".Dashboard").toggleClass("active");
},300);
}
});
/////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////


$(".blogs-btn").click(function(){
  if(!($(".blogs").hasClass("active"))){

$(".active").effect("drop",200);
$(".active").toggleClass("active");
setTimeout(function(){
$(".blogs").show("slide",200);
$(".blogs").toggleClass("active");
},300);
}
});


/////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////


$(".statistics-btn").click(function(){
  if(!($(".statistics").hasClass("active"))){

$(".active").effect("drop",200);
$(".active").toggleClass("active");

setTimeout(function(){
$(".statistics").show("slide",200);
$(".statistics").toggleClass("active");

},300);
}
});




});
