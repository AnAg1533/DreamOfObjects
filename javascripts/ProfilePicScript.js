$(function(e)
{
    $('.ProfileCam').hide();
    $('.ProfileCam').css('z-index','5');
    
    var a ;

    $('.ProfilePic').mouseenter(function(e)
    {
       
       a = $('.ProfilePic').attr('src');

       $('.ProfilePic').attr('src','../media/Cam.png');
       $('.ProfilePic').css('background-color','#4655FA');
       

    });

    $('.ProfilePic').mouseout(function(e)
    {
        $('.ProfilePic').attr('src',a);
    })
})