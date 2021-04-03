<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='./css/LandingStyle.css'/>
    <link rel='stylesheet' href='./css/FormStyle.css'/>
    <title>Home</title>
  </head>
  <body>
    

  <div class='landing-page'>
    <div class='page-content'>
            <h1>&lt;/&gt;DreamofObjects.Com</h1>
            <p>Become a wizard learn to code</p>
            <a href='#login'>Get Started</a>
    </div>
    
  </div>
  
  <div class='container-fluid'>
    <div class='row d-flex justify-content-center' style='margin-bottom:50px;'>
      <div class='col-6 d-flex justify-content-center'>
        <h1 style='text-align:center;'>Here's a list of our top most wanted courses</h1>
      </div>
    </div>
    
    <div class='row'>
      <div class='col-12 col-md-6 col-lg-3'>
        <img style='height:550px; width:350px;'src='./media/boook.png'/>
      </div>
      <div class='col-12 col-md-6 col-lg-3'>
        <img style='height:550px; width:350px;'src='./media/book2.png'/>
      </div>
      <div class='col-12 col-md-6 col-lg-3'>
        <img style='height:550px; width:350px;'src='./media/book3.png'/>
      </div>
      <div class='col-12 col-md-6 col-lg-3'>
        <img style='height:550px; width:350px;'src='./media/Cover.png'/>
      </div>
    </div>
  </div>

  <div class='container-fluid'>
        <div class='row d-flex justify-content-center'>

            <div class='col-12 col-lg-9 d-flex justify-content-center'>
                <div class='align'>
                    <div class='head'>
                    <div class='LogReg'>
                    <a id='login' class='selected' href='#login'>Login</a>
                    <a id='register' href='#register'>Register</a>
                    </div>  
                    <div class='card'>  
                        <form id='form1' method="POST" action='./pages/loginPost.php' class='log d-flex justify-content-between flex-column align-items-center'>
                            <div class='input in1'><img src='./media/person.svg'/><input type='text' placeholder='username' name='UserName'/></div>
                            <div class='input in1'><img src='./media/password.svg'/><input type='password' placeholder='password' name='Password'/></div>
                            <input type='submit' value='Login'  class='submit in1'/>
                        </form>

                        <form id='form2' method="POST" action='./pages/registerPost.php' class='log d-flex justify-content-between flex-column align-items-center'>
                            <div class='input2'><img src='./media/person.svg'/><input type='text' placeholder='Name' name='Name'/></div>
                            <div class='Warning1' id='War1'><p class='Warning1' id='War1'>Name cannot contain numbers or special characters</p></div>

                            <div class='input2'><img src='./media/person.svg'/><input type='text' placeholder='Last Name' name='LastName'/></div>
                            <div class='Warning1' id='War1'><p class='Warning1' id='War5'>Name cannot contain numbers or special characters</p></div>

                            

                            <div class='input2'><img src='./media/person.svg'/><input type='text' placeholder='UserName' name='UserName'/></div>
                            <div class='Warning1' id='Wa1'><p class='Warning1' id='Wa1'>UserName already taken</p></div>

                            <div class='input2'><img src='./media/email.svg'/><input type='email' placeholder='Email' name='Email'/></div>
                            <div class='Warning1' id='War2'><p class='Warning1' id='War2'>Name cannot contain numbers or special characters</p></div>

                            <div class='input2'><img src='./media/password.svg'/><input type='password' placeholder='password' name='Password'/></div>
                            <div class='Warning1' id='War3'><p class='Warning1' id='War3'>Password too short</p></div>

                            <div class='input2'><img src='./media/lock.svg'/><input type='password' placeholder='confirmation' name='Confirmation'/></div>
                            <div class='Warning1' id='War4'><p class='Warning1' id='War4'>Passwords do not match</p></div>

                            <input type='submit' value='Register'  class='submit input2'/>
                            <script src='./javascripts/formScript.js'></script>
                        </form>
                        
                    </div>
                
                    </div>
                    
            
                
            </div>
            



        </div>
   </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./javascripts/scroll.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>