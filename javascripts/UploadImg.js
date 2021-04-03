$(function(e)
{       
    $('.ImageUpload').hide();
    
    $('.ProfilePic').click(function(e)
    {
        $('.ImageUpload').show();
    })
    $('.CloseButton').click(function(e)
    {
        $('.ImageUpload').hide();
    });
});