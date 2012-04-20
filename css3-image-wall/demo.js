$(document).ready(function(){
    if(!Modernizr.csstransitions){
        $("#photo-wall li").hover(function(){
            $(this).siblings().find("img").stop().fadeTo(400, .5);
        }, function(){
            $(this).siblings().find("img").stop().fadeTo(400, 1);
        });
    }
});