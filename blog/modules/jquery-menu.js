$(function(){
$(".menu-animation").click(function(){

$(".menu-animation").toggleClass("change");
setTimeout(function () {
  $(".item1").toggleClass("hidden");
        setTimeout(function () {
          $(".item2").toggleClass("hidden");
                  setTimeout(function () {
                    $(".item3").toggleClass("hidden");

    },150);
  },150);
},150);







});


});
