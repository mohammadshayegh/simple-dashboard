$(document).ready(function(){
    
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll == '0'){
            $('#c-nav-top').addClass('c-nav-scroll-0').removeClass('pt-3').removeClass('c-nav-scroll');
        }else{
            $('#c-nav-top').removeClass('c-nav-scroll-0').addClass('pt-3').addClass('c-nav-scroll');
        }
        
    });
})