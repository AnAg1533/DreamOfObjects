$(function(e)
{   
    var attribute1 = $('.Prof').attr('src');
    $('.Prof').css('transition','0.3s');
    $('.Prof').css('cursor','pointer');
    $('.Prof').mouseenter(function(e)
    {   
        
        console.log('the mouse passed by');
        $('.Prof').attr('src','../media/Cam.png');
    });

    $('.Prof').mouseout(function(e)
    {
        
        $('.Prof').attr('src',attribute1);
        window.open('../index.php');
        
    })
})