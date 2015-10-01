$(window).bind('scroll',function(e){
    parallaxScroll();
});

function parallaxScroll(){
    var scrolled = $(window).scrollTop();
    $('.pbg1').css('top',(0-(scrolled*.25))+'px');
    $('.pbg2').css('top',(0-(scrolled*.5))+'px');
    $('.pbg3').css('top',(0-(scrolled*.75))+'px');
}