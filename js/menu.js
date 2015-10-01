$(document).ready(function(){


   $("#current").click(function(){

     /*  $(".main-nav ul").fadeOut(2000);  */
       $(".main-nav ul").toggleClass("vivsibleNone");

     });



});

/*$(window).scroll(function(e){
  parallax();
});
function parallax(){
  var scrolled = $(window).scrollTop();
  $('.pbg').css('top',-(scrolled*0.2)+'px');
}*/
/* $(window).bind('scroll',function(e){
    parallaxScroll();
});


function parallaxScroll(){
    var scrolled = $(window).scrollTop();
    $('.pbg1').css('top',(0-(scrolled*.25))+'px');
    $('.pbg2').css('top',(0-(scrolled*.5))+'px');
    $('.pbg3').css('top',(0-(scrolled*.75))+'px');
}*/


/*$(window).bind('scroll',function(e){
    parallaxScroll();
});

function parallaxScroll(){
    var scrolled = $(window).scrollTop();
    $('.pbg1').css('top',(0-(scrolled*.25))+'px');
    $('.pbg2').css('top',(0-(scrolled*.5))+'px');
    $('.pbg3').css('top',(0-(scrolled*.75))+'px');
}*/