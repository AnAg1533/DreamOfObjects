$(function(e)
{
    $('.data2').hide();
    $('.data3').hide();
    $('.data4').hide();

    $('.Tab1').click(function(e)
    {
        $('.Tab1').addClass('Selected');
        $('.Tab2').removeClass('Selected');
        $('.Tab3').removeClass('Selected');
        $('.Tab4').removeClass('Selected');
        $('.data1').show();
        $('.data2').hide();
        $('.data3').hide();
        $('.data4').hide();
        
    })
    
    $('.Tab2').click(function(e)
    {
        $('.Tab1').removeClass('Selected');
        $('.Tab2').addClass('Selected');
        $('.Tab3').removeClass('Selected');
        $('.Tab4').removeClass('Selected');
        $('.data1').hide();
        $('.data2').show();
        $('.data3').hide();
        $('.data4').hide();
    })
    
    $('.Tab3').click(function(e)
    {
        $('.Tab1').removeClass('Selected');
        $('.Tab2').removeClass('Selected');
        $('.Tab3').addClass('Selected');
        $('.Tab4').removeClass('Selected');
        $('.data1').hide();
        $('.data2').hide();
        $('.data3').show();
        $('.data4').hide();
    })
   
    $('.Tab4').click(function(e)
    {
        $('.Tab1').removeClass('Selected');
        $('.Tab2').removeClass('Selected');
        $('.Tab3').removeClass('Selected');
        $('.Tab4').addClass('Selected');
        $('.data1').hide();
        $('.data2').hide();
        $('.data3').hide();
        $('.data4').show();
    })
    
})