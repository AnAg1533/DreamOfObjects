<?php

        session_start();
        $sql = null;
        $data = null;
        if(isset($_SESSION['UserId']))
        {
            $servername='localhost';
            $username = 'username';
            $database = 'Courses';
            $password='password';


            try
            {
                $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
                $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                echo "Connecteydo";
            }
            catch(PDOException $e)
            {
                echo "Connection failure with error code " .$e;
            }


            $sql = $conn -> prepare("SELECT Name,LastName FROM Member WHERE ID = ?");
            $sql -> execute(array($_SESSION['UserId']));
            $data = $sql -> fetch();
        }
        else
        {
            session_destroy();
            $_SESSION=array();
        }





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
  <body>
    <div class='Top'>
        <h1>&lt;/>DreamOfObjects.com</h1>
        <div class='TopDiv'>
        <h1><?php echo $data['Name'] . " " .$data['LastName'] ;?></h1>
        <?php
            if(isset($_SESSION['UserId']))
            {
                echo
                "
                <a href='member.php' class='MemberLink'><img title='Go to profile' class='profile'src='../media/person2.svg'/></a>

                ";
            }
        ?>
        </div>
    </div>

    <div class='Content'>

        <aside>
            <div class='N'><h3>JavaScript</h3></div>
            <div  class='N'><input placeholder='Search' type='search' class='searchbar'/></div>
            <div><a href='#TextEditor/Browser'>1-Setup your WorkPlace : Text Editor and browser</a></div>
            <div><a href='#Variabls'>2-Declare variables</a></div>
            <div><a href='#Conditions'>3-Decision making with condition</a></div>
            <div><a href='#Loops'>4-Add loops in your program</a></div>
            <div><a href='#Functions'>5-Functions</a></div>
            <div><a href='#DOMIntroduction'>6-DOM introduction</a></div>
            <div><a href='#LinkedFile'>7-Created a linked JavaScript file</a></div>
            <div><a href='#Events'>8-Add Events to your website</a></div>
            <div><a href='#Animations'>9-Animations</a></div>
            <div><a href='#Elements'>10-Add and modify elements</a></div>
            <div><a href='#CSSAdd'>11-Modify the css of your elements</a></div>
            <div><a href='#Colors'>12-Add and customize your page using colors and backgrounds</a></div>
            


        </aside>
        <section>
        <?php
            if(isset($_SESSION['UserId']))
            {
                echo "<a href='StartJavaScript.php'><input type='button' class='GetStarted' value='click here to start Course'></a> <br/><br/>";
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
        <strong>JavaScript </strong> is one of the most used programming languages, in this tutorial, we will show<br/>
        you how to build an interactive web interface using javascript so you will learn add animations and change <br/>
        your webpage colors in your webpage
        <h1 class='Chapter'>Forced Induction</h1>
        <p>
            Before we get straight to writing hundreds of lines of code, this will be a brief <br/>
                        introduction that will inform you about :<br/>
                        <ul>
                            <li>A small history about <strong>JavaScript</strong></li>
                            <li>Advantages and disadvantages of <strong>JavaScript</strong></li>
                            <li>What is the use of <strong>JavaScript</strong> and what you can also learn</li>
                        </ul>
                    
        </p> 
        <h1 class='Chapter'>A small History</h1>
        <p>
        Javascript was created by Brendan Eich during his time with Netscape at 1995<br/>
                        originally inspired by <strong>Java</strong>, javascript dominated the market<br/>
                        back at the day .<br/>
                        <a href='https://en.wikipedia.org/wiki/JavaScript' target='blank'>More information here</a>
        </p>

        <h1 class='Chapter'>Advantages and inconveinients of Javascript</h1>
        
        <p>
                        Advantages of <strong>Javascript</strong> :
                        <ul>
                            <li>  
                                Easy syntax : <strong>javascript's</strong> syntax makes it an easy language to learn<br/>
                                as you can understand it easily especially for teamwork
                            </li>
                            <li>
                                Multiple uses : wich is one of the strongest javascript advantages, you can use it for a <br/>
                                lot of stuff, such as <strong>Web Developpment</strong>,<strong>video game developpment</strong>,
                                <strong>Desktop & phone applications</strong><br/>
                            </li>
                            <li>
                                <strong>JavaScript</strong> has a variety of frameworks and libraries that allow you to do a lot of stuff <br/>
                                and minimize your time
                            </li>
                            <li>
                                Runs everywhere.
                            </li>
                        </ul>
        </p>

        <h1 class='Chapter'>Setup your environment for JavaScript</h1>
        <p>
                        To setup your work environment, you primarely need two things :<br/>
                        <ul>
                            <li><strong>Code Editor</strong></li>
                            <li><strong>Compiler & Debugger</strong></li>
                        </ul>

                        The code editor is the application that you will type your code in <br/>
                        for example : <br/>
                                    <ul>
                                        <li>
                                            Visual Studio Code : <a target='blank' href='https://code.visualstudio.com/'>Download here</a><br/>
                                        </li>
                                        <li>
                                            NotePad ++ : <a target='blank' href='https://notepad-plus-plus.org/downloads/'>Download here</a><br/>
                                        </li>
                                        <li>
                                            Microsoft Visual Studio :<a target='blank' href='https://visualstudio.microsoft.com/'>Download here</a><br/>
                                        </li>
                                    </ul>
                        The Compiler is what translates your code to binaries (0 and 1) so that your computer can understand it<br/>
                        in our case, we will be using a browser's console as it is easy and fun to learn, you'll preferably need<br/>
                        some basic HTML5 Knowledge, you can find it <a target='blank' href='./HTMLCourse.html#Structure'>Here</a> so that we get started , and just like a<br/>
                        compiler, you have a variety of choices, this time it's wider <br/>
                        <ul>
                            <li>
                                Google Chrome : <a href='https://www.google.com/chrome/'>Download here</a>
                            </li>
                            <li>
                                Opera : <a href='https://www.opera.com/fr/download'>Download here</a>
                            </li>
                            <li>
                                Safari : <a href='https://support.apple.com/downloads/safari'>Download here</a>
                            </li>
                            <li>
                                Brave : <a href='https://brave.com/download/'>Download here</a>
                            </li>
                            <li>
                                Mozilla firefox : <a href='https://www.mozilla.org/en-US/firefox/new/'>Download here</a>
                            </li>
                        </ul> 
                        just to let you know, we're using <strong>Visual Studio Code</strong> and <strong>Google Chrome</strong><br/>
                        to teach you how to start working in Javascript , everything you'll write in your code is called instructions<br/>
                        <strong>instructions</strong> are orders you give to your programm, each instruction ends with a <strong>semicolon ;</strong><br/>
                        

                    </p>

                    <h1 class='Chapter'>Declare variables and put them in use</h1>

                    <p>

                        A <strong>Variable </strong> is a storage location that is associated to store information, and it can<br/>
                        be identified by it's unique name <br/>
                            <ul>
                                <li>a variable's name cannot contain spaces, only underscores '_'</li>
                                <li>a variable's name must begin with a letter, an underscore or a dollar sign '$'</li>
                                <li>variable names can only contain underscores,dollar signs, letters and numbers</li>
                            </ul>

                            There are two ways to declare a variable :<br/>
                        <div id='White'>

                            <span id='prefix'>var</span> <span id='name'>VariableName </span> = <span id='value'>value</span><br/>
                            <span id='prefix'>let</span> <span id='name'>VariableName </span> = <span id='value'>value</span><br/>
                        </div>    
                        in order to compile your code, open your browser, press <strong>CTRL + SHIFT + I</strong>  to open the<br/>
                        developper tools then choose the console .then, you can either type the script directly in the console<br/>
                        or you can type it in the html file we've created earlier,
                        this is what you should type in your script in order to show the value of a variable in the console<br/>

                        <div id='White'>
                            var age = 15;<br/>
                            console.log(age);
                        </div>
                        wich displays 15 in the screen <br/>
                        there are multiple data types that can be stored in a variable, and that are resumed <br/>
                        in the table Down here :
                            <table>
                                <tx>
                                    <th>Type</th>
                                    <th>Definition</th>
                                <tx>
                                <tr>
                                    <td>integer</td>
                                    <td>natural numbers</td>
                                </tr>
                                <tr>
                                    <td>float or double</td>
                                    <td>numbers that contain a comma </td>
                                </tr>
                                <tr>

                                    <td>
                                        string
                                    </td>
                                    <td>all ascii characters as long as they're considered as text</td>
                                </tr>
                                <tr>
                                    <td>
                                        bool
                                    </td>
                                    <td>
                                        returns as a value true or false, and is generally made to check
                                    </td>
                                </tr>
                            </table>

                            luckly, you don't really have to define the type of your variable when declaring<br/>
                            it in javascript,so here's how to declare the type of each variable <br/>
                            <div class='codeArea'>

                                <span class='Syntax'>var</span> a =<span class='Int'> 1 </span> ; <span class='Comment'>//this is an integer</span><br/>
                                <span class='Syntax'>var</span> b =<span class='Int'> 10.1343 </span>;<span class='Comment'> //this is a double</span><br/>
                                <span class='Syntax'>var</span> c =<span class='String'> "Dream of Objecs"</span> ;<span class='Comment'> //this is a string</span><br/>
                                <span class='Syntax'>var</span> d = <span class='Bool'>true </span>; <span class='Comment'>//this a boolean </span><br/>

                            </div>


                    </p>

                    <h1 class='Chapter'>Conditionals</h1>

                    <p>
                        <strong>Conditions</strong> are data structures that will allow your program to <br/>
                        make decisions based on actions that you <strong>The programmer</strong> add in <br/>
                        your program, Conditions simply test whethere these actions are true or<br/>
                        false then makes decision based on it.<br/>

                        This is the general syntax of a condition:<br/>

                        <div class='codeArea'>
                            <span class='Syntax'>if</span>&nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//&nbsp;&nbsp;Condition here</span>&nbsp;&nbsp;&nbsp;&nbsp;)<br/>
                            {<br/><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//&nbsp;&nbsp;Actioons here</span><br/><br/>
                            }<br/>
                            <span class='Syntax'>else if</span>&nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//&nbsp;&nbsp;Other Condition here</span>&nbsp;&nbsp;&nbsp;&nbsp;)<br/>
                            {<br/><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//&nbsp;&nbsp;Actioons here</span><br/><br/>
                            }<br/> 
                            <span class='Syntax'>else</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//&nbsp;&nbsp;if no condition is true</span>&nbsp;&nbsp;&nbsp;&nbsp;<br/>
                            {<br/><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;&nbsp;//Actioons here</span><br/><br/>
                            }<br/> 
                        </div>
                        Note that you can add as many <strong>'else if'</strong> statments as you want but it's not the case <br/>
                        for <strong>'if'</strong> and <strong>'else'</strong> as your program will throw up an error or get out <br/>
                        of the current condition .<br/>    
                    </p>

                    <p>
                        <strong>switch</strong> switch statements are not much different than simple conditions, <br/>
                        the thing is , they run conditions on one variable and function based on wheter it's <br/>
                        equal to a variable or not<br/>

                    </p>
                    <div class='codeArea'>
                    <span class="Syntax">switch</span>(&nbsp;&nbsp;&nbsp;<span class='Comment'>//expression</span>)<br/>
                         {<br/>
                            &nbsp;&nbsp;<span class="Syntax">case</span>&nbsp;&nbsp;&nbsp; <span class='Comment'>//first case here</span>:<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;&nbsp;&nbsp;// code block</span><br/>
                            &nbsp;&nbsp;<span class='Syntax'>break;</span><br/><br/>
                            &nbsp;&nbsp;<span class='Syntax'>case</span> <span class='Comment'>&nbsp;&nbsp;&nbsp;//second case here</span>:<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;&nbsp;&nbsp;// code block</span><br/>
                            &nbsp;&nbsp;<span class='Syntax'>break;</span><br/><br/>
                            &nbsp;&nbsp;<span class='Syntax'>default:</span><span class='Comment'>&nbsp;&nbsp;&nbsp;//if no 'case' is true this is the executed instruction</span><br/><br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="Comment">&nbsp;&nbsp;&nbsp;// code block</span><br/>
                          }<br/>
                    </div>

                    <h1 class='Chapter'>Loops</h1>
                    <p>
                    <strong>Loops</strong> are decision making structures that are but, and in opposition to <strong>Conditions</strong><strong>Loops</strong>
                   , the instructions inside<br/>
                    a loop are executed repeatdly until the there's an <strong title='condition that turns either true or false to get you out of the structure'>exit condition</strong>
                    that ends the condition. there are two ways to write a <br/> loop in javascript : <br/>

                    the <strong>While</strong> loop :

                    <div class='codeArea'>
                    <span class='Syntax'>while</span> (<span class='Comment'>//Entry Condition</span>)<br/>
                        {<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//instructions that are executed while the loop is true</span><br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//this wont stop till the entry condition is false</span><br/>
                        }<br/>
                    </div>

                    note that you can manually stop the loop by adding the keyword <strong>break ;</strong> anywhere inside<br/>
                    the body of your loop to stop it, but the code after the <strong>break;</strong> won't be executed , so this<br/>
                    keyword is usually written in the end of the loop or inside a condition that cancels the entry condition<br/>

                    the <strong>for</strong> loop unlike the<strong>While</strong>loop is executed a specefic amount of times<br/>
                    that you can define, you need to :
                                                <ul>
                                                    <li>
                                                        a variable that contains the starting value of the loop
                                                    </li>
                                                    <li>
                                                        setting a limit to the variable, (defining how many times <br/>
                                                        the loop will render)
                                                    </li>
                                                    <li>
                                                        defining the step, wich is how much the value will increase or<br/>
                                                        decrease during the loop before it reaches the limit<br/>
                                                    </li>
                                                </ul>
                    This is the genereal syntax of a <strong>For Loop</strong>While</strong>:


                    <br/>

                    <div class='codeArea'>
                    <span class="Syntax">for</span>(&nbsp;&nbsp;&nbsp;<span class='Comment'>Declaring the starting value</span>&nbsp;&nbsp;&nbsp;; &nbsp;&nbsp;&nbsp;<span class='Comment'>Setting the end Value</span>&nbsp;&nbsp;&nbsp; ; &nbsp;&nbsp;&nbsp;<span class='Comment'>The step value</span>&nbsp;&nbsp;&nbsp;)<br/>
                    {<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>//&nbsp;&nbsp;&nbsp; instructions to execute</span><br/>
                    }<br/>
                    </div>

                  these are the  <strong>arithmetic operators</strong> that you will use to test your <strong>Conditions</strong> and <strong>Loops</strong><br/>

                    <table id='Operators'>
                        <tr>
                            <th>Operator</th>
                            <th>Functionality</th>
                        </tr>
                        <tr>
                            <td>
                                ==
                            </td>
                            <td>
                                Equal to
                            </td>
                        </tr>
                        <tr>
                            <td>

                                &lt;
                            </td>
                            <td>
                                inferior to
                            </td>
                        </td>
                        <tr>
                            <td>
                                &gt;
                            </td>
                            <td>
                                superior to
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &lt;=
                            </td>
                            <td>
                                inferior or equal
                            </td>                      
                        </tr>
                        <tr>
                            <td>
                                &gt;=
                            </td>
                            <td>
                                superior or equal
                            </td>
                        </tr>
                    </table>
                    </p>

                <h1 class='Chapter'>Store data in tables</h1>
                <p>
                    <strong>Tables</strong> in javascript,allow you to store variables in one container called<br/>
                    a table this is the general syntax of a Table <br/>
                    <div class='codeArea'>
                    <span class='Syntax'>var</span> Table = [ <span class='String'>'variable'</span> ,<span class='Int'>12</span> ,<span class="Int">123.32123</span> ,<span class='Bool'> true</span> ]<br/>
                    <span class='Syntax'>var</span> Table2= [ ];<br/>
                    </div>
                    as you may notice, a <strong>table</strong> in javascript can contain all types of data<br/>
                    (integer,double,string,bool)<br/>
                    the second line shows you how to declare an empty table<br/>
                </p>

                <h1 class='Chapter'>Write less code using functions</h1>
                <p>
                    <strong>Functions</strong> are pieces of code that'll allow you to write shorter code, so instead of writing<br/>
                    the same thing once,you can define a <strong>function</strong> and call it everytime you need it, a function<br/>
                    can have as much parameters as you want, it can also contain no parameters wich means you'll leave what's <br/>
                    between the brackets empty<br/>
                    this is the general syntax of a function <br/>


                    <div class='codeArea'>
                    <span class='Syntax'>function</span>  Name(&nbsp;&nbsp;<span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;&nbsp;You put the parameters here</span>&nbsp;&nbsp;&nbsp;&nbsp;)<br/>
                    {<br/>&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'> //&nbsp;&nbsp; You write the instructions to execute here</span><br/>
                    }<br/>&nbsp;&nbsp;

                    <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Down here is how you call the function</span><br/>
                    Name(<span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Parameters in here</span>);<br/>

                    <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Mi Gna</span>
                    </div>

                    Example of calling a function : <br/>

                    <div class='codeArea'>
                        <span class='Syntax'>function</span> Add(<span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Param1,Param2&nbsp;&nbsp;</span>)<br/>
                        {<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;return Param1+Param2;<br/>
                        }<br/>
                        console.log(&nbsp;&nbsp;&nbsp;Add&nbsp;(&nbsp;&nbsp;&nbsp;<span class='Int'>1</span>&nbsp;&nbsp;&nbsp;,&nbsp;&nbsp;&nbsp;<span class='Int'>2</span>&nbsp;&nbsp;&nbsp;));<br/>
                    </div>

                    
                    As you may have noticed, there's a new word wich is <strong>return</strong>, return specifies the <br/>
                    value that you want your function to return, for the example i just wrote, the function returns<br/>
                    the result of an addition of the two parameters, then the function is called to be executed to<br/>
                    to show the addition of the 2 and 1 wich will display 3 in the console.<br/>
                    if the function has no parameter and you wanna add a <strong>return</strong> in your function<br/>
                    the returned value has to be created inside the function as a <strong>variable</strong>
                </p>

                <h1 class='Chapter'>Use JavaScripts in your HTML Files</h1>
                <p>
                    so now that you've learned the basics of javacsript, you need to learn how to use it in your web<br/>
                    interface, for this , we will be using the<strong title="DOCUMENT OBJECT MANAGER"> DOM </strong>this very
                    simple but powerful concept that handles<br/> your HTML documents like a structure that is a tree.
                    this is the general scheme of how DOM handles your HTML documents . <br/><br/>

                    <img src="../media/Dom.jpg"/>
                </p>

                <h1 class='Chapter'>Add JavaScript to your WebSite</h1>

                <p>
                    There are two ways to add JavaScript to your website :<br/>
                    <ul>
                        <li>
                            Creating a script tag in your HTML document
                        <li>
                        <li>
                            Creating an independent script then linking it to your HTML page
                        </li>
                    </ul>
                    JavaScripts can be linked/added anywhere inside your webpage but it's preferable that <br/>
                    you link or add your JavaScripts  in the <strong>&lt;head&gt;</strong> of your website or in the bottom<br/>
                    of your Document.
                    <br/>
                    so here's how to add JavaScripts to your websites : 
                    <br/>
                    <div class='codeArea'>
                        <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Example of adding JS inside the page</span><br/>
                        <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                        <span class='tag'>&lt;html&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;//&nbsp; JavaScripts Here (inside the webpage)</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;body&gt;</span><br/>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;//&nbsp; Your HTML Elements here</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;//&nbsp; JavaScripts Can be also here(recommended)</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/body&gt;</span><br/>
                        <span class='tag'>&lt;/html&gt;</span><br/>
                    </div>
                    <br/>
                    <br/>
                    <div class='codeArea'>
                        <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Example of linking JS to your page</span><br/>
                        <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                        <span class='tag'>&lt;html&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script src=<span class='Int'>'./script.js'</span>&gt;</span>
                        <span class='tag'>&lt;/script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;body&gt;</span><br/>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>&nbsp;//&nbsp; Your HTML Elements here</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script src=<span class='Int'>'./script.js'</span>&gt;</span>
                        <span class='tag'>&lt;/script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/body&gt;</span><br/>
                        <span class='tag'>&lt;/html&gt;</span><br/>
                    </div>
                    <br/>
                    After creating a link to your website, now all you need to do is to add javascript source code<br/>
                    in this series of tutorials,we will be using the second way,(Creating a link)<br/>

 




                
                </p>

                <h1 class='Chapter'>Store DOM elements in variables</h1>

                <p>
                    in the next few chapters, we'll be adding events,modifying elements, and animating<br/>
                    them, but before we can do any of that, we have to be able to detect our elements<br/>
                    in JavaScript.in order to do that, you have to add an Id to the element you wanna<br/>
                    detect
                </p>

                <div class='codeArea'>
                        <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;identifiying an element in your WebSite</span><br/>
                        <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                        <span class='tag'>&lt;html&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;body&gt;</span><br/>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>
                        &lt;button id=<span class='Int'>'Button1'</span>&gt;</span> &gt;Click Here<span class='tag'>&lt;/button&gt;</span><br/>
                       
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/body&gt;</span><br/>
                        <span class='tag'>&lt;/html&gt;</span><br/>
                </div>

                <br/>
                note that when you create your file you should save it in the <strong>.js</strong> extention for example script1.js<br/> 

                <div class='codeArea'>
                        
                        <span class='Syntax'>var</span> a = <span class='El'>document.getElementById("<span class='String'>Button1</span>")</span>&nbsp; ;<br/>
                        <span class='Comment'>&nbsp;&nbsp;// we store the element in a variable using his id</span>
            
                </div>

                <h1 class='Chapter'>Add events to your website</h1>

                <p>
                    Javascript <strong>Events</strong> are changes that occur in your website when a certain<br/>
                    <strong>action</strong> happens, this action is called an event.<br/>

                    here's a list of the most used events in JavaScript<br/>


                    <table>
                        <tr>
                            <th>Event</th>
                            <th>Definition</th>
                            
                        </tr>
                        <tr>
                            <td>click</td>
                            <td>When the element is clicked</td>
                        </tr>
                        <tr>
                            <td>dblclick</td>
                            <td>When the element is double clicked</td>
                        </tr>
                        <tr>
                            <td>
                                mouseover
                            </td>
                            <td>
                                when the pointer is over the element
                            </td>
                        </tr>
                        <tr>
                            <td>mouseout</td>
                            <td>when the pointer is out of the element</td>
                        </tr>
                        <tr>
                            <td>mouseup</td>
                            <td>when you let go after clicking at element</td>
                        </tr>
                        <tr>
                            <td>keydown</td>
                            <td>When you maintain a key on your keyboard</td>
                        </tr>
                        <tr>
                            <td>keypress</td>
                            <td>When you press a key in your keyboard</td>
                        </tr>
                        <tr>
                            <td>change</td>
                            <td>when the element changes</td>
                        </tr>
                        <tr>
                            <td>select</td>
                            <td>when the element is selected</td>
                        </tr>

                    </table>

                    <br/><br/>

                    Now we will demonstrate how to add a simple click event and check whether it happened or not<br/>
                    if it happens a message will be displayed on the screen that you've clicked. <br/>
                    here's what it will look like.<br/><br/><br/>


                    <button id='Button1'>Click here</button>


                    <script>
                        var a = document.getElementById("Button1");

                        a.addEventListener('click',function(e)
                        {
                            alert("You Have clicked");
                        });
                    </script>


                    <div class='codeArea'>
                        
                    <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Example of a click event in your website</span><br/>
                    <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;name this page index.html</span><br/>
                        <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                        <span class='tag'>&lt;html&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;body&gt;</span><br/>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;button id='<span class='Int'>Button1</span>'&gt;</span>
                        Click Here <span class='tag'>&lt;/Button&gt;</span><br/>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script src=<span class='Int'>'./Script1.js'</span>&gt;</span><span class='tag'>&lt;/script&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/body&gt;</span><br/>
                        <span class='tag'>&lt;/html&gt;</span><br/>
                    </div>


                    <div class='codeArea'>
                        <span class='Comment'>// &nbsp;&nbsp; This is the Script1.js</span><br/>
                        &nbsp;&nbsp;<span class='Syntax'>var</span> a = document.getElementById("<span class='String'>Button1</span>");<br/>

                        &nbsp;&nbsp;a.addEventListener('<span class='String'>click</span>',function(<span class='Int'>e</span>)<br/>
                        &nbsp;&nbsp;{<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    alert("You Have clicked");<br/>
                        &nbsp;&nbsp;});<br/>
                        
                    </div>

                </p>

                <h1 class='Chapter'>Modify Css of your Elements</h1>

                <p>
                    Yes , i know right? you can already modify css using style sheet, but what if you want<br/>
                    to change the colors of your website when user clicks on a button? JavaScript!!<br/>
               

                <div id='ColorDiv'style='height:250px; width:450px; background:white; border:solid black; display:flex;justify-content:center;align-items:center;'>
                            <button id='Button2'>Click here to change Color</button>

                            <script>
                                var a = document.getElementById('Button2');
                                var div = document.getElementById('ColorDiv');

                                a.addEventListener("click",function(e)
                                {   
                                    div.style.backgroundColor='#0088FF';

                                    a.style.display='none';
                                   
                                });
                            </script>

                </div>

                <br/>
                as you can see, when you click on the button, the button itself dissapears,wich can<br/>
                only mean that i modified both the appearance of the display of the button and the <br/>
                background color. here's the code .<br/><br/>
                
                <div class='codeArea'>
                                
                        <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;Example of modifying the css of your website</span><br/>
                        <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;You can name this page index.html</span><br/>
                        <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                        <span class='tag'>&lt;html&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;body&gt;</span><br/>

                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;div id='<span class='Int'>ColorDiv</span>'style='<span class='Int'><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;height:250px; width:450px; background:white; border:solid black;<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; display:flex;justify-content:center;align-items:center;</span>'></span>
                        <br/>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <span class='tag'>&lt;button id='Button2'&gt;</span>Click here to change Color<span class='tag'>&lt;/button&gt;</span><br/>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/div&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;script src='<span class='String'>Script2.js</span>'&gt;</span>


                       
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/body&gt;</span><br/>
                        <span class='tag'>&lt;/html&gt;</span><br/>
                </div>
                
                <div class='codeArea'>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class='Comment'>// this is the script file that you should link to your website</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class='Syntax'>var</span> a = document.getElementById('<span class='String'>Button2</span>');<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class='Syntax'>var</span> div = document.getElementById('<span class='String'>ColorDiv</span>');<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                a.addEventListener(<span class='Int'>"click"</span>,function(<span class='Int'>e</span>)<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;               
                {   <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                div.<span class='style'>style</span>.<span class='style'>backgroundColor</span>='#0088FF';<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                
                a.<span class='style'>style</span>.<span class='style'>display</span>='none';<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                   
                });<br/>

                </div>
                </p>

                <h1 class='Chapter'>Modify attributes of your elements</h1>

                <p>
                    again, you can already modify attributes of your elements using HTML, but<br/>
                    what if you want to modify them during action? for example you wanna modify<br/>
                    the source of a picture once it <br/><br/>

                    <br/>
                    Try double clicking on the image down here 
                    <br/>
                

                
                <img id='Shelby' src='../media/shely.jpg'>
                
                </p>

                <script>
                    var D = document.getElementById("Shelby");
                    D.addEventListener('dblclick',function(e)
                    {
                        D.setAttribute('src','../media/lambo.jpg');
                    });
                </script>

                <p>
                    when you double click, on the image , it's attribute changes.<br/>
                    in order to acheive this demo, you'll need two images, so i <br/>
                    suggest you download them <a href='https://unsplash.com/' target='blank'>Here.</a>
                </p>


                <div class='codeArea'>
                
                    
                <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;this is the html file of an image who's source will change when dblclick</span><br/>
                        <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                        <span class='tag'>&lt;html&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;body&gt;</span><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class='tag'>&lt;img id='<span class='Int'>Shelby</span>' src='<span class='String'>./img1.jpg</span>'&gt;</span><br/>
                       
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/body&gt;</span><br/>
                <span class='tag'>&lt;/html&gt;</span><br/>


                </div>

                <div class='codeArea'>
                <span class='Comment'>&nbsp;&nbsp;//&nbsp;&nbsp;this is the script file, don't forget to link it</span><br/>

                    &nbsp;&nbsp;&nbsp;<span class='Syntax'>var</span> D = document.getElementById("Shelby");<br/>
                    &nbsp;&nbsp;&nbsp;D.addEventListener('<span class='Int'>dblclick</span>',function(<span class='Int'>e</span>)<br/>
                    &nbsp;&nbsp;&nbsp;{<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D.setAttribute('<span class='style'>src</span>','<span class='String'>./lamborghini.jpg</span>');<br/>
                    &nbsp;&nbsp;&nbsp;});<br/>
                    
                </div>

                <?php

if(isset($_SESSION['UserId']))
    if(isset($_GET['Started']) && $_GET['Started']==1 )
    {
        echo "<a href='FinishJavaS.php'><button class='EndButton'>Click here to finish Course</button></a>";
    }

?>

<?php

    if(isset($_GET['Finished'])&&$_GET['Finished']==1)
    {
        echo 
        "
        <script>
            $(function(e)
            {
               alert('Check your Progress tab in your profile ');
            })
        </script>
        
        ";
    }



?>


                
        </section>


        
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>