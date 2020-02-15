// back top top 
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 50) { 
            $('#goTop').fadeIn(); 
        } else { 
            $('#goTop').fadeOut(); 
        } 
    }); 
    $('#goTop').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    });     
});