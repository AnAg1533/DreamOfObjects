<?php

      session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='../css/Course2Style.css'/>
    <title>Hello, world!</title>
    <link rel="icon" href="../media/Icon.png">

  </head>


  <?php

      $servername = 'localhost';
      $username = 'username';
      $database = 'Courses';
      $password = 'password';

      try
      {
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Connected";
      }
      catch(PDOException $e)
      {
        echo "Connection failure with error code " . $e;
      }
      
      $sql = $conn -> prepare("SELECT * FROM Member WHERE ID=?");
      $sql -> execute(array($_SESSION['UserId']));

      $data=$sql->fetch();
  
  ?>
  <body>
    <div class='Top'>
        <h1>&lt;/>DreamOfObjects.com</h1>
        <div class='TopDiv'>
        <h1><?php echo $data['Name'] .' '. $data['LastName']?></h1>
        <a href='member.php' class='MemberLink'><img class='profile'src='../media/person2.svg'/></a>
        </div>
    </div>

    <div class='Content'>

        <aside>
            <div class='N'><h3>PHP&MySQL</h3></div>
            <div  class='N'><input placeholder='Search' type='search' class='searchbar'/></div>
             <div><a href='#TextEditor/Browser'>1-Get the right tools</a></div>
            <div><a href='#TextEditor/Browser'>2-Introduction to php My adming</a></div>
            <div><a href='#Variabls'>2-MySQL Create and Delete Database using phpMyAdmin</a></div>
            <div><a href='#Conditions'>3-MySQL Add and Drop tables</a></div>
            <div><a href='#Loops'>4-MySQL Alter And Update</a></div>
            <div><a href='#Functions'>5-MySQL Delete From Tables</a></div>
            <div><a href='#DOMIntroduction'>6-PHP Create Connection</a></div>
            <div><a href='#LinkedFile'>7-PHP Register</a></div>
            <div><a href='#Events'>8-PHP Login</a></div>
            <div><a href='#Animations'>9-PHP Session</a></div>
            <div><a href='#Elements'>10-PHP Cookies</a></div>
            <div><a href='#CSSAdd'>11-PHP Logout</a></div>
            


        </aside>
        
        <section>
        <?php
            if(isset($_SESSION['UserId']))
            {
                echo "<a href='StartPHP.php'><input type='button' class='GetStarted' value='click here to start Course'></a> <br/><br/>";
            }

            if(isset($_GET['Started']) && $_GET['Started']==1)
            {
                echo
                "
                <script>
                        $(function(e)
                        {
                            $('.GetStarted').attr('value','Started');
                        })
                </script>
                ";
            }
        ?>
       
            <h1 class='Chapter'>PHP & MySQL</h1>
            <h1 class='Chapter'>Forced induction</h1>

            <p>
                <strong>PHP & MySQL</strong> come together as a programming language<strong>( PHP )</strong>, and a database managment<br/>
                system <strong>( MySQL )</strong> that itself uses the programming language <strong>SQL</strong>. when used together<br/>
                these two will allow you to create a website that contains a database . for this course, we will be creating a simple<br/>
                login,register website because the best way to learn these two programming languages is by practice.
            </p>

            <h1 class='Chapter'> Get The Right tools</h1>

            <p>
                <strong>PHP & MySQL</strong> can only be understood by server therefor, you'll need to install a server<br/>
                platform in your computer. such as <strong>XAMPP</strong> or <strong>WAMP Server</strong>,for this tutorial<br/>
                we recommend you to install <strong>XAMPP</strong> as it's less complicated platform.they both contain Apache<br/>
                wich is an opensource and free web server software . <br/>
               

                You can install XAMPP <a target='blank' href='https://www.apachefriends.org/download.html'>Here.</a><br/>
                You can install WAMP Server <a target='blank' href='https://sourceforge.net/projects/wampserver/'>Here.</a><br/>
                The video down here will demonstrate to you how to download xampp and test if it works<br/><br/><br/>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/I4Ut_fxxR-w" frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            </p>

            <h1 class='Chapter'>introduction to phpMyAdmin</h1>
            <p>
                <strong>Database?</strong> what is it? i never heard of it, a <strong>database</strong> is a 
                list of informations that<br/> is well organized so that it can be accessed and used easily.<br/>
                so in order to create your first database in your local server, you open XAMPP control panel <br/>
                then look for your apache port name , i use in this tutorial the port 8080, the default port <br/>
                is 80 , if you haven't changed it just click  <a target='blank' href='localhost/phpmyadmin'>here</a><br/>
                if you have changed your port name, just type in your search bar : <strong>localhost:NewPortNumber/phpmyadmin</strong>
            </p>

            <img src='../media/MyAdmin.jpg' style='height:700px; width:900px;'/>

            <br/><br/><br/>
            <p>
                  Each numbered section will be given  name just so when i am speaking you get what<br/>
                  i'm talking about. so : <br/><br/>

                  <strong>1-Database list :</strong> it's the section where all the databases you have created are<br/>
                  displayed on the section on the left<br/>
                  <strong>2-Current table section : </strong> in this section, all the tables you've created in your <br/>
                  currently selected database are displayed with thier columns and rows.(it's not now selected)<br/>
                  <strong>3-Errors section : </strong> When entering mySQL queries wich we'll be doing soon,<br/>
                  you risk of commiting errors, the erros sections is where errors and warnings are displayed<br/> 
                  so as successful task messages<br/>
                  <strong>4-ToolBox : </strong> i gave it this name is it contains in way the tools we'ere gonna<br/>
                  using very very soon, such as sql console.<br/>

                  to open the <strong>SQL Console</strong>, just click on sql on the tools bar<br/>
            </p>

            <h1 class='Chapter'>Create and delete a databse</h1>

            <p>
                your database list for now is empty, to create a new database go to the console<br/>
                and type : <br/>


                <div class='codeArea'>

                    <span class='query'>CREATE DATABASE</span> Name;<br/>
                    <span class='query'>DROP DATABASE</span> Name;<br/>
                    <span class='Comment'>--This is a comment in mysql, so down here we're gonna <br/>
                    --write an example of database creation query</span><br/>

                    <span class='query'>CREATE DATABASE</span> TestDatabase;<br/>
                    <span class='query'>DROP DATABASE</span> Name;<br/>
                    <br/>
                    <span class='Comment'>-- Never forget the ; in the end of every query you  write </span>
                    

                </div>
            </p>

            <h1 class='Chapter'> 
                  MySQL Creating and dropping tables<br/>
            </h1>
            <p>
                  now that you've created a databse, it's name shall appear on the database list on the left<br/>
                  click on it, then click on the sql tab from the tools box <br/>
                  <div class='codeArea'>
                  <span class='Comment'>--This example will show you how to create <br/>--and delete a table in your </span><br/>
                  <span class='query'>CREATE TABLE</span> TableName(<span class='col'>col1 type</span>,
                  <span  class='col'>col2 type</span>,<span  class='col'>col3 type</span>,<span  class='col'>col4 type</span>);<br/>
                  <span class='query'>DROP TABLE</span> TableName;<br/>

                  <span class='Comment'>--Example of creating and dropping a table</span><br/>

                  <span class='query'>CREATE TABLE</span> User(<span class='col'>Name varchar(<span class='Int'>255</span>)</span>,
                  <span  class='col'>LastName varchar(<span class='Int'>255</span>)</span>,<span  class='col'>Email varchar(<span class='Int'>255</span>)</span>,<span  class='col'>age int</span>);<br/>
                  <span class='query'>DROP TABLE</span> User;<br/>
                  
                  </div>
            </p>
            <h1 class='Chapter'>
              Alter ,Insert Into and Update a table
            </h1>
            <p>
                  Altering a table, will allow you to add a column in it, for example if <br/>
                  you've created a user table but forgot the age column, you can add it<br/>
                  without having to delete the table then create it again<br/>

                  <div class='codeArea'>

                  <span class='Comment'>--this is the general syntax of an alter table query</span><br/>
                  <span class='query'>ALTER TABLE</span> TableName<span class='query'>ADD</span>column type<br/>

                  <span class='Comment'>--Example</span><br/>
                    <span class='query'>ALTER TABLE</span> User <span class='query'> Add</span> Age int;
                    <span class='query'>ALTER TABLE</span> User <span class='query'>Add</span> Name varchar(<span class='Int'>255</span>);
                  
                  </div>
                  Inserting into a table? of course, i mean a table would be nothing without<br/>
                  data inserted in it? so how do we do it? it's really simple<br/>

                  <div class='codeArea'>
                  <span class='Comment'>--Inserting values in when we choose the order</span><br/><br/>
                  <span class='query'>INSERT INTO</span> User (<span class='col'>Name</span>,
                  <span class='col'>LastName</span>,<span class='col'>Age</span>)<span class='query'> VALUES</span>
                   (<span class='String'>"John"</span>,<span class='String'>"Green"</span>,<span class='Int'>25</span>)
                   ,(<span class='String'>"David"</span>,<span class='String'>"Lasso"</span>,<span class='Int'>33</span>);<br/><br/>

                   <span class='Comment'>--Inserting values in without choosing the order</span><br/><br/>
                  <span class='query'>INSERT INTO</span> User<span class='query'> VALUES</span>
                   (<span class='String'>"John"</span>,<span class='String'>"Green"</span>,<span class='Int'>25</span>)
                   ,(<span class='String'>"David"</span>,<span class='String'>"Lasso"</span>,<span class='Int'>33</span>);<br/><br/>
                  
                  </div>

                  Oops, you've inserted a value but it's wrong, you can change it using the update query <br/>

                  <div class='codeArea'>
                    <span class='Comment'>--This is the general update query Syntax </span><br/><br/>
                    <span class='query'>UPADTE</span> TableName <span class='query'>SET</span> col = <span class='Int'>Value</span>;<br/><br/>

                    <span class='Comment'>--Here'es an example of the update query
                     </span><br/><br/>
                    <span class='query'>UPADTE</span> User <span class='query'>SET</span> Age = <span class='Int'>35</span><span class='query'> WHERE </span>Name = <span class='String'>"David"</span>;<br/><br/>
                  </div>
                  
            </p>
            <h1 class='Chapter'>DELETE</h1>
            <p>
                  Deleting data that you don't need no more from your  tables is definetly one <br/>
                  of the things that you definetly need to learn<br/>

                  <div class='codeArea'>
                    <span class='Comment'>--This is the general Syntax of a delete query</span><br/><br/>
                    <span class='query'>DELETE FROM</span> TableName <span class='query'>WHERE</span> Condition ;<br/><br/>

                    <span class='Comment'>--Example</span><br/><br/>
                    <span class='query'>DELETE FROM</span> User <span class='query'>WHERE</span> Age=35 ;<br/><br/>

                    <span class='Comment'>--Deletes all the users who's age is 35</span>
                  </div>
            </p>

          <h1 class='Chapter'>SELECT</h1>
          <p>
                  Tables created,updated,deleted,now what, you need to display them :<br/>
                  before being able to display them , you need to <strong>SELECT</strong> what you wanna display<br/>

                  <div class='codeArea'>  

                  <span class='Comment'>
                    --selecting everything in a table
                  </span><br/><br/>
                  <span class='query'>SELECT</span> * <span class='query'>FROM</span> TableName;<br/><br/>

                  <span class='Comment'>
                    --selecting a specefic column in a table
                  </span><br/><br/>
                  <span class='query'>SELECT</span> col <span class='query'>FROM</span> TableName;<br/><br/>

                  <span class='Comment'>
                    --selecting everything in a table
                  </span><br/><br/>
                  <span class='query'>SELECT</span> * <span class='query'>FROM</span> User;<br/><br/>

                  <span class='Comment'>
                    --selecting a specefic column in a table
                  </span><br/><br/>
                  <span class='query'>SELECT</span> age <span class='query'>FROM</span> TableName <span class="query">WHERE</span> name="<span class='String'>David</span>";<br/><br/>
                  
                  </div><br/><br/>

                  this video below will help you understand and use all queries correctly<br/><br/>


                  <iframe width="560" height="315" src="https://www.youtube.com/embed/-_uUahYmIlY" frameborder="0"
                   allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </p>


           <h1 class='Chapter'>PHP Create connection</h1>

           <p>
                 All what we've done so far was MySQL,we need to add php code in our webpage in order<br/>
                 to interact with our database, first things first,  you need to create a connection to <br/>
                 Your Database <br/>
           </p>

           <div class='codeArea'>

           <span class='Comment'>--Creating a PDO connection</span><br/><br/>

           <span class='query'>&lt;?php</span> <br/>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class='Int'>$servername</span> = "localhost";<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class='Int'>$username</span> = "username";<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;<span class='Int'>$password</span> = "password";<br/>
              <br/><br/>
              <span class='Int'>try</span> <br/>
              {<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class='Int'>$conn</span> = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>// set the PDO error mode to exception</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;echo <span class='String'>"Connected successfully"</span>;<br/>
              }<br/> 
              <span class='Int'>catch</span> (PDOException $e)<br/> {<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;echo <span class='String'>"Connection with error code : "</span> .<span class='Int'> $e</span>;<br/>
              }<br/>
              <span class='query'>?&gt;</span>
           
           
           </div>

           <h1 class='Chapter'>Create a register Form to your website</h1>


           <p>
              one of the main reasons why you'd want to use a database in your website is <br/>
              the register process,for the register form, we're going to be using the <br/>
              <strong>POST</strong> method that allows you to transfer data via forms<br/>

              the video down here demonstrates how to do so<br/>
           </p>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/og8IiLmHbAI" frameborder="0" 
           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
           </iframe>

           <h1 class='Chapter'> Create a login form</h1>

           <p>
              now, that you've created a register process, you need to allow your user to <br/>
              access his memeber space on your website.the video down here will demostrate<br/>
              for you how to create a <strong>Secure</strong> login process<br/>
           </p>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/BMMVAEJKoHw" frameborder="0" 
           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

           <h1 class='Chapter'>Create a logout form</h1>

           <p>
            Loggin out is important,but you have to logout as well.otherwise<br/>
            the data of your user will be exposed.with a few couple lines of code<br/>
            anyone will be able to breach into it.this viddeo will demonstrate how<br/>
            to create correctly a logout <br/>
           </p>

           <iframe width="560" height="315" src="https://www.youtube.com/embed/kS5YTJJMx7A" frameborder="0" 
           allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



           <h1 class='Chapter'>What now?</h1>
           <p>
            You finsihed the course, if you feel like you haven't fully understood PHP, Feel free to contact me <br/>
            via the contact us and ask me any questions you want, it would be definetly my pleasure to improve this course

           </p> 


           <?php

                if(isset($_SESSION['UserId']))
                if(isset($_GET['Started']) && $_GET['Started']==1 )
                {
                    echo "<a href='FinishMySql.php'><button class='EndButton'>Click here to finish Course</button></a>";
                }

          ?>
   
        </section>

 

        

        
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>