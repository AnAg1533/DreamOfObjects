<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Admin Login</title>
        <link rel="icon" href="../media/Icon.png">
        <style>

           body
            {
                display:flex;
                justify-content:center;
            }
            
            div
            {
                display:flex;
                justify-content:space-evenly;
                align-items:center;
                flex-direction:column;
                border:solid black;
                padding:25px;
                margin-top:100px;
            }
        </style>
    </head>
    <body>


                    <form method='POST' action='BlogerPost.php'>
                        
                        <div>
                            <h1>Login</h1>
                            <input name='UserName' type='text' placeholder='UserName' name='UserName'/><br/>
                            <input name='Password' type='password' placeholder='Password' name='Password'/><br/>
                            <input type='submit' value='Confirm'/>
                        </div>
                    </form>


 


    </body>





</html>