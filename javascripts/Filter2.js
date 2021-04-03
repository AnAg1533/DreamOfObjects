$(function(e)
{
    $('.SearchButton').click(function(e)
    {
        $('.Sub1').trigger('click');
    });

    $('.CatFilt').change(function(e)
    {
        $('.Sub2').trigger('click');
    });

    
})