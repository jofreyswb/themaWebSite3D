$('#min_paralax').bind('scroll',function(e){
    parallaxScroll();
});

function parallaxScroll(){
    var scrolled = $('#min_paralax').scrollTop();
    $('.pbg1').css('background',(0-(scrolled*.10))+'px');
    $('.pbg2').css('background',(0-(scrolled*.20))+'px');
    $('.pbg3').css('background',(0-(scrolled*.30))+'px');
}

/*window  top */