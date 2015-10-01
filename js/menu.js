$(document).ready(function(){


   $("#current").click(function(){
     /*  $(".main-nav ul").fadeOut(2000);  */
     $(".main-nav ul").toggleClass("vivsibleNone");
    }); 
	
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // создаем объект
        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент
            // Присваиваем значение background-position
            var coords = 'center '+ yPos + 'px';
            // Создаем эффект Parallax Scrolling
            $bgobj.css({ backgroundPosition: coords });
        });
    });

});

