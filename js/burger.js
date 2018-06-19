$(document).ready(function() {

    // JQUERY NAV TOGGLE
    $('.burger').bind('click',function(event){
        $('nav').slideToggle(500);
    });


    $(window).resize(function(){  
        if($(window).width() > 805) {  
            $('nav').removeAttr('style');  
        }  
    });  
  });