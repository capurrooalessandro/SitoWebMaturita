
$(document).ready(function(){ 
    //img1 (ProVS)       
    $("#img1").click(function(){  
        $("#toggle1").stop().slideToggle("slow");
    });
    $("#img1").mouseover(function(){
        $("#img1").css('cursor', 'pointer');
        $("#img1").stop().animate({opacity: '0.75'});
    });
    $("#img1").mouseleave(function(){
        $("#img1").stop().animate({opacity: '1'});
    });
    //img2 (DX7) 
    $("#img2").click(function(){  
        $("#toggle2").stop().slideToggle("slow");
    });
    $("#img2").mouseover(function(){
        $("#img2").css('cursor', 'pointer');
        $("#img2").stop().animate({opacity: '0.75'});
    });
    $("#img2").mouseleave(function(){
        $("#img2").stop().animate({opacity: '1'});
    });
    //img3 (M1) 
    $("#img3").click(function(){  
        $("#toggle3").stop().slideToggle("slow");
    });
    $("#img3").mouseover(function(){
        $("#img3").css('cursor', 'pointer');
        $("#img3").stop().animate({opacity: '0.75'});
    });
    $("#img3").mouseleave(function(){
        $("#img3").stop().animate({opacity: '1'});
    });
    //img4 (CMI) 
    $("#img4").click(function(){  
        $("#toggle4").stop().slideToggle("slow");
    });
    $("#img4").mouseover(function(){
        $("#img4").css('cursor', 'pointer');
        $("#img4").stop().animate({opacity: '0.75'});
    });
    $("#img4").mouseleave(function(){
        $("#img4").stop().animate({opacity: '1'});
    });
    //img5 (Emax) 
    $("#img5").click(function(){  
        $("#toggle5").stop().slideToggle("slow");
    });
    $("#img5").mouseover(function(){
        $("#img5").css('cursor', 'pointer');
        $("#img5").stop().animate({opacity: '0.75'});
    });
    $("#img5").mouseleave(function(){
        $("#img5").stop().animate({opacity: '1'});
    });
    //img6 (Moog) 
    $("#img6").click(function(){  
        $("#toggle6").stop().slideToggle("slow");
    });
    $("#img6").mouseover(function(){
        $("#img6").css('cursor', 'pointer');
        $("#img6").stop().animate({opacity: '0.75'});
    });
    $("#img6").mouseleave(function(){
        $("#img6").stop().animate({opacity: '1'});
    });
    
    //sandwich (responsive)
    $("button").mouseover(function(){
        $("button").stop().animate({opacity: '0.6'});
    });
    $("button").mouseleave(function(){
        $("button").stop().animate({opacity: '1'});
    });
});  