$(document).ready(function(){ 
    //sandwich (responsive)
    $("button").mouseover(function(){
        $("button").stop().animate({opacity: '0.6'});
    });
    $("button").mouseleave(function(){
        $("button").stop().animate({opacity: '1'});
    });
});
