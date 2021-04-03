$(function(e)
{
    $('.RegF').hide()


    $(".Login").click(function(e)
    {
        $(".RegF").hide();
        $(".LogF").show();
        
    });

    $(".Register").click(function(e)
    {
        $(".LogF").hide();
        $(".RegF").show();
    })
})