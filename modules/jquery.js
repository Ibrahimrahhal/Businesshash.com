$(document).ready(function (){
          $("#arrow").click(function (){
              $('html, body').animate({
                  scrollTop: $("#page-two").offset().top
              }, 1000);
          });
      });
