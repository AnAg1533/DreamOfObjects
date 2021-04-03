<?php


    session_start();
    session_destroy();
    $_SESSION = array();

?>












<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='./css/Landing.css'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="./media/Icon.png">
  
     
    
    









    <title>Home</title>


    <script>
        $(function(e)
        {   
            $('*').mouseenter(function(e)
            {
                $('.Vide').trigger('play');
            });
        });
    </script>
  </head>
  <body id='Top'>
    <header  class='Top container-fluid'>
        <div class='row MainLinkContainer'>
            <div class='LinkContainer'>

            <a href='#' class='Selected'>HOME</a>
            <a href='#Pricing' class='linked'>PRICING</a>
            <a href='./pages/Blog.php' class='linked'>BLOG</a>
            <a href='./pages/Browse.php' class='linked'>BROWSE</a>
            <a href='#About' class='linked'>ABOUT</a>

            <a href='./pages/Contact.php' class='Contact'>CONTACT US</a>

            </div>
        </div>
    </header>
    <section class='container-fluid'>
        <article class='MainContent'>
            <video src='./media/Intro2.mp4' class='Vide' autoplay>
            </video>

            <div class='Container2'>
                <h1>&lt;/&gt;DreamOfObjects.com</h1>
                <h3>Become a wizard, Learn to code</h3>
                <a href='#FormSection'>GET STARTED  </a>
            </div>
        </article>
    </section>

    <section class='container-fluid'>

        <article class='Prices' id='Pricing'>

            <div class='Price1 Price'>
                <h1>
                    Basic
                </h1>
                <h1 class='Ab'>
                    0$/Mo
                </h1>
                <div>
                <h3>
                    No registery required
                </h3>

                <h3>
                    Free Learning
                </h3>

                <h3>
                    Blog Access
                </h3>

                <h3>
                    Limited Access
                </h3>
                <h3>
                    Ad-Supported
                </h3>
                </div>
            </div>

            <div class='Price2 Price'>
                <h1>Standard</h1>

                <h1 class='Ab'>
                    0$/Mo
                </h1>
                <div>
                <h3>
                    Standard Account
                </h3>
                <h3>
                    Blog Access
                </h3>
                <h3>
                    Resume Builder(optional)
                </h3>
                <h3>
                    Premium Courses(optional)
                </h3>
                <h3>
                    Limited Access
                </h3>
                <h3>
                    Ad-Supported
                </h3>
                </div>
                
            </div>
            <div class='Price3 Price'>
                <h1>Premium</h1>
                <h1 class='Ab'>
                    10$/Mo
                </h1>
                <div>
                <h3>
                    Premium Account
                </h3>
                <h3>
                    Blog Access
                </h3>
                <h3>
                    Resume Builder
                </h3>
                <h3>
                    Supported learning
                </h3>
                <h3>
                    unlimited Access
                </h3>

                <h3>
                    Ad-Free
                </h3>
                <h3>
                    Coming soon
                </h3>
                </div>
            </div>
        </article>

    </section>
    <section id='FormSection' class='GS'>
    <div class='LogReg'>

        <form method="POST" class="LogF"action="./pages/LoginPost.php">
        <div class='Titles'>
        <h1 class='Active Login'>Login</h1>
        <h1 class='Register'>Sign Up</h1>
        </div>

        <div class='Form1'>

            <div><input type='text' class='Input12' placeholder='USERNAME' name='UserName'><img src='./media/person.svg'/></div>
            <div><input type='password' class='Input12' placeholder='PASSWORD' name='Pass'><img src='./media/lock.svg'/></div>
            <div class='Error7'><p class='Error7'>UserName or password Corrupted</p></div>
            <input type='submit' value='LOGIN' class='LOGON'/> 
        </div>
        </form>


        



        <form class='RegF' method="POST" action="./pages/RegisterPost.php">
        <div class='Titles'>
        <h1 class='Login'>Login</h1>
        <h1 class='Register Active'>Sign Up</h1>
        </div>
        
        <div class='Form2'>

            <div><input type='text' class='Input12 Name' placeholder='NAME' name='Name'><img src='./media/person.svg'/></div>
            <div class='Error3'><p class='Error3'>Name cannot contain special charachters or numbers</p></div>
            <div><input type='text' class='Input12 LastName' placeholder='LASTNAME' name='LastName'><img src='./media/person.svg'/></div>
            <div class='Error4'><p class='Error4'>Name cannot contain special charachters or numbers</p></div>
            <div><input type='text' class='Input12' placeholder='USERNAME' name='UserName'><img src='./media/person.svg'/></div>
            <div class='Error2'><p class='Error2'>UserName Already taken</p></div>
            <div><input type='email' class='Input12' placeholder='EMAIL' name='Email'><img src='./media/email.svg'/></div>
            <div class='Error'><p class='Error'>Email Already taken</p></div>
            <div><input type='password' class='Input12 Password' placeholder='PASSWORD' name='Password'><img src='./media/lock.svg'/></div>
            <div class='Error5'><p class='Error5'>Password too short or should contain special characters</p></div>
            <div><input type='password' class='Input12 Confirmation' placeholder='CONFIRMATION' name='Confirmation'><img src='./media/lock.svg'/></div>
            <div class='Error6'><p class='Error6'>Passwords don't match</p></div>
            <div>
                <select name='Membership' class='MemberShip'> 
                    <option value="1">--MemberShip--</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>
                </select>
            </div>
            <input type='submit' value='REGISTER' class='REGISTER'/> 
        </div>
        </form>
        <script src='./javaScripts/SecurityCheck.js'></script>
        <script src='./javascripts/formsScript.js'></script>


        
    </div>
    </section>



    <section class='container-fluid d-flex justify-content-center align-items-center'>
        
        <div class='Courses'>
            <h1>Here's a Top 3 of our Most wanted Courses</h1>

            <div class='Covers'>
                    <img src='./media/Cover2.jpg' class='Cover'/>
                    <img src='./media/PHPCover1.jpg' class='Cover'/>
                    <img src='./media/jQueryCover.jpg' class='Cover'/>

            </div>
        <div>

    </section>

    <section class='container-fluid d-flex justify-content-center'>
        
        <div class='About' id='About'>
            <h1>
                About Us
            </h1>

            <div class='div2'>
            </div>
            <div class='Info'>
                    <p>
                            CEO : Full_03_410s<br/>
                            Associates : Walid Marrir, Ahmed Fth<br/>

                            We are fellow programmers who are trynna help you unleash<br/>
                            your potential in programming, design, and writing.<br/>
                            We upload Monthly new courses,subscribe to the newssettler<br/>
                            so you don't miss any offers <br/>
                            this website started in 2020 .<br/>

                    </p>
            </div>
        </div>

    </section>


    <section class='container-fluid C'>

        <section class='ContactUS'>
        <h1>Contact US</h1>
        <div>
    
            <div class='SocialM'>
                <div class='L'><a href='https://www.facebook.com/walid.fast'><img src='./media/facebook.svg' class='Icon'/></a> <p>Find us on Facebook</p></div>
                <div class='L'><a href='https://www.instagram.com/walidmaarir/'><img src='./media/instagram-sketched.svg' class='Icon'/></a><p>Find us on Instagram</p></div>
        
            </div>
            <div class='mid'></div>

            <div class='Pro'>
                <a href="./pages/Contact.php">Report a bug</a>
                <a href="./pages/Contact.php">Send us a message</a>
            </div>
        </div>
        
        </section>
        
        
    </section>


    <div class='NewSettler'>
            <h1>Subscribe to our newsettler and <br/>get the latest news and offers</h1>
            <form method="POST" action="./pages/NewSettlerPost.php">

                <div class='NewsForm'>
                    <div class='Con11'>
                        <input type='email' placeholder='Email' name='Email' class='NewsEmail'/>
                        <img src='./media/email.svg'/>
                    </div>
                    <div class='ButtonS'>
                        <input type='submit' value='subscribe' class='InBut'/>
                    </div>
                </div>
            </form>

            

    </div>

    <img src='./media/Close.png' class='CloseN'/>


    <?php
            
            if(isset($_GET['kklhadflkjhadsf']) && $_GET['kklhadflkjhadsf']==82583)
            {
                echo 
                "
                    <script>
                        $(function(e)
                        {
                            $('.NewSettler').css('display','none');
                             $('.CloseN').css('display','none');
                        });
                    </script>
                ";
            }
        
    ?>


    <a href='#Top'><img src='./media/up.svg' class='UpArrow'/></a>

    <script src='./javascripts/NewSettlerScript.js'></script>
    <script src='./javascripts/SecurityCheck2.js'></script>
    <?php

        if(isset($_GET["ERRORCODE"]) && $_GET["ERRORCODE"]==1)
        {
            echo "<script>
            
                    $(function()
                    {
                        $('.Error').show();
                        $('.Register').trigger('click');
                    });
            
            </script>";
        }
        else
        {
            echo "<script>
            
                    $(function()
                    {
                        $('.Error').hide();
                    });
            
            </script>";

        }

        if(isset($_GET["kjjsahdlsajd"]) && $_GET["kjjsahdlsajd"]==2)
        {
            echo "<script>
            
                    $(function()
                    {
                        $('.Error2').show();
                        $('.Register').trigger('click');
                    });
            
            </script>";
        }
        else
        {
            echo "<script>
            
                    $(function()
                    {
                        $('.Error2').hide();
                    });
            
            </script>";

        }


        if(isset($_GET['saldh1432lkjh123']))
        
            if($_GET['saldh1432lkjh123']==756)
            {
                echo 
                "<script>
                
                        alert('Your Register was succesful, you have been redirected, to access your account login');

                </script>";

            }
        
        if(isset($_GET['hkljashd']))
            if($_GET['hkljashd']==243)
            {
                echo 
                "
                    <script>

                    $(function(e)
                    {
                        
                        $('.Error7').show();
                    });

                    </script>
                ";
            }

                
       
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>