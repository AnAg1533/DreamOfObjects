$(function(e)
{   
    $('.ImageUpload2').hide();
    $('.CloseButton2').click(function(e)
    {
        $('.ImageUpload2').hide();
    });

    $('.CoverCam').click(function(e)
    {
        $('.ImageUpload2').show();
    })
})