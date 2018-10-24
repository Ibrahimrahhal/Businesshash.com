$(function(){
$(".main-wrapper-submit").click(function(){
$(".main-wrapper-email-form").toggleClass("animation");
$(".black").show("blind",800);


});

$(".black").click(function () {
  $(".main-wrapper-email-form").toggleClass("animation");
  $(".black").hide("blind",500);


});





});
