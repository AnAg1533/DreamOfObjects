$(function(e)
{

    var isTrue = true;
    if(isTrue === true)
    {
        console.log("It is true indeed");
    } 
    
    $('.Error3').hide();
    $('.Error4').hide();
    $('.Error5').hide();
    $('.Error6').hide();
    $('.REGISTER').attr('disabled',true);
    var CorrectName;
    var CorrectLastName;
    var CorrectStructure;
    $('.Name').change(function(e)
    {
        var B = $('.Name').val();
        

        for(var i=0;i<B.length;i++)
        {
            CorrectName=true;
            if( B[i] == '1' || B[i] == '2' || B[i] =='3' || B[i] =='4' || B[i] =='5' || B[i] =='6' || B[i] =='7' || B[i] =='8' || B[i] =='9'
            || B[i] =='~' || B[i] =='!'|| B[i] =='@'|| B[i] =='#'|| B[i] =='$'|| B[i] =='%'|| B[i] =='^'|| B[i] =='&'|| B[i] =='*'|| B[i] =='('
            || B[i] ==')'|| B[i] =='_'|| B[i] =='-'|| B[i] =='+'|| B[i] =='+'|| B[i] =='{'|| B[i] =='}'|| B[i] =='|'|| B[i] ==':'|| B[i] =="'"
            || B[i] =='"'|| B[i] =='<'|| B[i] =='>'|| B[i] =='?' || B[i] =='/'|| B[i] ==','|| B[i] =='.'|| B[i] =='+')
            {
                $('.Error3').show();
                CorrectName=false;
            }
            else
            {
                CorrectName=true;
                $('.Error3').hide();
            }
        }
    });

    $('.LastName').change(function(e)
    {   
        var B = $('.LastName').val();
        for(var i=0;i<B.length;i++)
        {   
            CorrectLastName=true;
            if( B[i] == '1' || B[i] == '2' || B[i] =='3' || B[i] =='4' || B[i] =='5' || B[i] =='6' || B[i] =='7' || B[i] =='8' || B[i] =='9'
            || B[i] =='~' || B[i] =='!'|| B[i] =='@'|| B[i] =='#'|| B[i] =='$'|| B[i] =='%'|| B[i] =='^'|| B[i] =='&'|| B[i] =='*'|| B[i] =='('
            || B[i] ==')'|| B[i] =='_'|| B[i] =='-'|| B[i] =='+'|| B[i] =='+'|| B[i] =='{'|| B[i] =='}'|| B[i] =='|'|| B[i] ==':'|| B[i] =="'"
            || B[i] =='"'|| B[i] =='<'|| B[i] =='>'|| B[i] =='?' || B[i] =='/'|| B[i] ==','|| B[i] =='.'|| B[i] =='+')
            {
                $('.Error4').show();
                CorrectLastName=false;
            }
            else
            {
                CorrectLastName=true;
                $('.Error4').hide();
            }
        }
    });

    $('.Password').change(function(e)
    {   
        var B = $('.Password').val();
        

        for(var i = 0 ; i < B.length ; i++)
        {   
            CorrectStructure = true;
            if( B[i] == '1' || B[i] == '2' || B[i] =='3' || B[i] =='4' || B[i] =='5' || B[i] =='6' || B[i] =='7' || B[i] =='8' || B[i] =='9'
            || B[i] =='~' || B[i] =='!'|| B[i] =='@'|| B[i] =='#'|| B[i] =='$'|| B[i] =='%'|| B[i] =='^'|| B[i] =='&'|| B[i] =='*'|| B[i] =='('
            || B[i] ==')'|| B[i] =='_'|| B[i] =='-'|| B[i] =='+'|| B[i] =='+'|| B[i] =='{'|| B[i] =='}'|| B[i] =='|'|| B[i] ==':'|| B[i] =="'"
            || B[i] =='"'|| B[i] =='<'|| B[i] =='>'|| B[i] =='?' || B[i] =='/'|| B[i] ==','|| B[i] =='.'|| B[i] =='+' && B.length >=7)
            {
                $('.Error5').hide();
               CorrectStructure = true;
            }
            else
            {
                CorrectStructure = false;
                $('.Error5').show();
            }
        }
    });

    $('.Confirmation').change(function(e)
    {
        if($('.Confirmation').val()==$('.Password').val())
        {
            $('.Error6').hide();
            
        }
        else
        {
            $('.Error6').show();
        }
    })

    $('.MemberShip').change(function(e)
    {   
        console.log(CorrectStructure);
        console.log(CorrectName);
        console.log(CorrectLastName);
        
        
    });


  $('.RegF').change(function(e)
  {
        if(CorrectLastName && CorrectName && CorrectStructure)
        {
            $('.REGISTER').attr('disabled',false);
        }
        else
        {
            $('.REGISTER').attr('disabled',true);
        }
  })

});