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
    <link rel='stylesheet' href='../css/Course1Style.css'/>
    <link rel="icon" href="../media/Icon.png">
    <title>Hello, world!</title>
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
            <div class='N'><h3>HTML5 & CSS3</h3></div>
            <div  class='N'><input placeholder='Search' type='search' class='searchbar'/></div>
            <div><a href='#TextEditor/Browser'>1-Setup your WorkPlace : Text Editor and browser</a></div>
            <div><a href='#Structure'>2-Get to know the structure of your document</a></div>
            <div><a href='#KeyWords'>3-Common keyWords and tags</a></div>
            <div><a href='#FirstWebP'>4-Create your first webpage</a></div>
            <div><a href='#DefineWebP'>5-Define your webpage</a></div>
            <div><a href='#Links'>6-Add links to your webpage</a></div>
            <div><a href='#Images'>7-Add Images in your webpage</a></div>
            <div><a href='#AudioVideo'>8-Add audio and video to your webpage</a></div>
            <div><a href='#Referencials'>9-Understanding how to create links and image references</a></div>
            <div><a href='#Attribues'>10-General Tag Attributes</a></div>
            <div><a href='#CSSAdd'>11-Add CSS to your webpage by creating a stylesheet</a></div>
            <div><a href='#Colors'>12-Add and customize your page using colors and backgrounds</a></div>
            <div><a href='#Borders'>13-Add borders to your elements</a></div>
            <div><a href='#Layout'>14-Create a custom layout using flexBox</a></div>
            <div><a href='#Forms'>15-Add forms to your website</a></div>
            <div><a href='#Practice'>16-Practice!!</a></div>
            <div><a href='#'>Test -- Coming Soon</a></div>


        </aside>
        <section>

        <?php
            if(isset($_SESSION['UserId']))
            {
                echo "<a href='StartHTMLCSS.php'><input type='button' class='GetStarted' value='click here to start Course'></a> <br/><br/>";
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
        <strong>HTML 5 & CSS 3 </strong> will allow you to create and modify your own websites using Tags.
        Tags are keywords that you will be using this whole course to be able to specify to your browser
        what type of content or text you will be using.

        <h1 class='Chapter'>PART I : Create a basic website using the simple concepts of HTML5</h1>

        <h2 class='Act' id='TextEditor/Browser'>Get the right tools :</h2>
        <p>
        The first thing you need to start working and creating projects is a <strong>Text Editor</strong><br/>
        a <strong>Text editor</strong> is what you're gonna be using in this course to write code<br/>
        of your WebPage. it's simply a software to edit and write text.<br/>
        I personnally like <strong> Visual studio code</strong> and im gonna be using it to demonstrate<br/>
        in this course, it's totally free, if you don't like it however, here are a few other text editors<br/>
        you can download ::<br/>
        <ul> 
            <li> Visual Studio Code <a href="https://code.visualstudio.com/">Download here</a></li>
            <li> NotePad++ &nbsp; <a href='https://notepad-plus-plus.org/downloads/'>  Download Here</a></li>
            <li> Visual Studio &nbsp;<a href='https://visualstudio.microsoft.com/downloads/'>Download here</a></li>
        </ul>
         If you're having trouble downloading your text editors, here's a tutorial that will clarify things for you <br/>
                            
        </p>
        <p>
            The second thing you'll need to have in order to work in HTML5 & CSS3 is a <strong>Browser</strong> <br/>
            you probably use browsers everyday, a browser, is a software application that allows you to see <br/>
            WebSites and pages, you'll need it to see the compilation of the code you'll write in your text <br/>
            editor, in this tutorial, i'll be using <strong>Google Chrome</strong>, it's free, OpenSource,<br/>
            and most importantly, it's fast, if you don't like <strong>Google Chrome</strong> here are a few other<br/>
            browsers you can download :<br/>
            <ul>
                <li>Mozilla FireFox &nbsp;  &nbsp; &nbsp;<a href="https://www.mozilla.org/en-CA/firefox/new/" target='blank'>Download here</a></li>
                <li>Internet Explorer &nbsp; &nbsp;<a target='blank' href="https://www.microsoft.com/en-ca/download/internet-explorer.aspx">Download here</a></li>
                <li>Safari   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;<a target='blank' href="https://support.apple.com/downloads/safari">Download here</a></li>
                <li>Opera    &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a target='blank' href="https://www.opera.com/download">Download here</a></li>
                <li>Brave    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a target='blank' href="https://brave.com/download/">Download here</a></li>
            </ul>
                                
        </p>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/EfGJYjq98Ng"
                             frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>

        <h2 class='Act' id='Structure'>Know the structure of your Document</h2>
        <p>
        
            
             to get started choose File > New , then choose a directory and name for your<br/>
             file then make sure you save it in a safe and known location that you can remember<br/>
             later.<br/>
            <span id='Creation'></span>
            the following screenshots will illustrate to you how to do it<br/>
            this is what the initial startup window looks like<br/>

            

            to get started , click on file, then choose new file it is untitled at the main time<br/>

            

            after opening an untitled file, click on file > Save as > then give it the name you want<br/>
            then choose the path, make sure that your remeber where you have saved it as you will need<br/>
            to get there later on . <br/>

            

            your document is empty for now, try typing any sentence and open it in the browser and try to<br/>
            check out what happens<br/><br/><br/>
            
            <video class='tutorial'src='../media/DOO.mp4' controls controlslist='nodownload'></video><br/><br/><br/>

            <span id='Definition'></span>

             Now let's take a closer look at that code inside the <strong>
            &lt;head&gt; &lt;/head&gt; :</strong><br/>
            as you can see, the sentence you've written has been displayed at the website, but in order<br/>
            to be able to modify it later, you're gonna need what i told you about earlier :  <strong>Tags</strong><br/>
            but first, lets Check Out the General structure of the document <br/>
            <div class='codeArea'>
                <span class='tag'>&lt;!DOCTYPE html&gt;</span><br/>
                <span class='tag'>&lt;html&gt;</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;head&gt;</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;title&gt;</span>This is the title of the page<span class='tag'>&lt;title&gt;</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/head&gt;</span><br/>

                <span class='tag'>&lt;/html&gt;</span><br/>
            </div>

                                
            what's inside the head tag is like an ID card for the website ::<br/>
            <ul>
                <li> <strong>&lt;meta charset='utf-8'&gt;</strong> : with this tag, you actually choose the encoding of the letters you <br/>
                     Wanna have in your website, if you don't add it to the document's head, you'll find sone weird <br/>
                     Characters that you won't be able to understand.
                </li>
                <li><strong>&lt;title&gt;&lt;/title&gt;</strong> : in here you choose the title that's gonna displayed in the tab<br/>
                    of your webpage<br/>
                    <img src='../media/TitleS.jpg'/>
                </li>                     
            </ul>
                        
        </p>

        <h2 class='Act' id='KeyWords'>KeyWords and Tags</h2>
        <p> 
                                Here's a list of keyWord <strong>Tags </strong>that we are gonna be mostly using  in this course :
                                <ul>

                                    <li>
                                        <strong>&lt;p&gt; &lt;/p&gt;</strong>: this tag is actually used to write a paragraph, to jump to the other line <br/>
                                        you primarly have two options :
                                        <ol>
                                            <li> Close the current paragraph tag and start an other one</li>
                                            <li> Or you can add the line jump tag <strong>&lt;br/&gt;</strong></li>
                                        </ol>
                                    </li>
                                    <li>
                                        <strong>&lt;hx&gt; &lt;/hx&gt;</strong> : this is tag is used to display a title in the document<br/>
                                        note that you have to replace the <strong>x</strong> with a number from 1 to 6<br/>
                                        depending on how important the title that you wanna display <br/> 

                                        <ul>
                                            <li><strong>&lt;h1&gt; This is the main title &lt;/h1&gt;</strong></li>
                                            <li><strong>&lt;h2&gt; This is an important title &lt;/h2&gt;</strong></li>
                                            <li><strong>&lt;h3&gt; This is a less important title &lt;/h3&gt;</strong></li>
                                            <li><strong>&lt;h4&gt; This is a title &lt;/h4&gt;</strong></li>
                                            <li><strong>&lt;h5&gt; This is a small important title &lt;/h5&gt;</strong></li>
                                            <li><strong>&lt;h6&gt; This is the least important title &lt;/h6&gt;</strong></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <strong>&lt;br/&gt;</strong> : you actually can use this tag anywhere in your webpage to jump the line<br/>
                                        like really, anywhere.
                                    </li>
                                    <li>
                                        <strong>&lt;!-- This is a Comment -- &gt;</strong>: this tag is used for to add comments for your code,<br/>
                                        you need to know that adding a comment won't change anything in the display of your website,so why use it?<br/>
                                        you're asking? for the two simple reasons that :
                                            <ol>
                                                <li>
                                                    Comments can be useful to understand your code easily if you use it later, wich you will
                                                </li>
                                                <li>
                                                    Comments are useful when working with your team on your Billion dollar buisness ;)<br/>
                                                    it makes them understand easily what you did with your code.
                                                </li>

                                            </ol>
                                    
                                    </li>
                                    <li>
                                        <strong>&lt;ul&gt; &lt;/ul&gt;</strong>: this tag is actually used to create a list, but pay attention!<br/>
                                        every list element should be between &lt;li&gt; &lt;li&gt;<br/>
                                        Example:<br/>

                                                <div class='codeArea'>
                                                <span class='tag'>&lt;ul&gt;</span> <br/>
                                                <span class='tag'>&nbsp;&lt;li&gt;</span>Fruits <span class='tag'>&lt;li&gt;</span><br/>
                                                <span class='tag'>&nbsp;&lt;li&gt;</span>Vegetables<span class='tag'>&lt;li&gt;</span><br/>
                                                <span class='tag'>&nbsp;&lt;li&gt;</span>Bakings<span class='tag'> &lt;li&gt;</span><br/>
                                                <br/>
                                                <span class='tag'>&lt;/ul&gt;</span>
                                                </div>
                                        <br/>
                                        wich displays:

                                        <ul>
                                                <li>Fruits</li>
                                                <li>Vegetables</li>
                                                <li>Bakings</li>
                                        </ul>

                                        
                                    </li>
                                   
        </p>

        <h2 class='Act' id='FirstWebP'>Create your first webpage using html</h2>

        <p>
            Your first page won't contain much, just some titles, paragraphs and a list<br/>
            if you follow the previous steps in your page you  should be just fine<br/>
            to make it a bit easier for you, here are the steps you can follow :<br/>
            
            
            
            <ol>
                <li>Open your code editor new > file</li>
                <li>Ctrl + S to save the file and name it : <strong>index.html</strong></li>
                <li>Type in the very basic html code of a webpage, you can either<br/>
                     copy it or download it <a href='Basic.html'>Here</a> 
                </li>
            </ol>
            <li>
            <strong> &lt;a href="Reference"&gt; This is a link &lt;/a&gt</strong>; : links are what you generally use to :<br/>
                    <ol>
                         <li>Go to a section in your website</li> 
                         <li>Go to an other page in the same website</li>
                         <li>Go to an external WebSite</li>
                     </ol>
                                        </li>
                    <span id='Images'></span>
                    <li>
                        <strong>&lt;img src='Source'&gt;</li> </strong> : this is the image tag, and it will allow you to insert <br/>
                                    an image inside your website, i'll talk to you about the reference later.
                        </li>
                        <span id='Videos'></span>
                        <li><strong>&lt;video src='Source'&gt;&lt;/video&gt;</strong></li>
                        <li><strong>&lt;audio src='Source'&gt;&lt;/audio&gt;</strong></li> 
                        </ul>


            The video down here demosntrates how to build a basic html website<br/>
            you're already becoming a developper <img class='Emoji' src='../media/glasses.png' style='border:none;'/><br/>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/M5vCBDYgBHs?start=11" 
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>


        <h2 class='Act'>Define your webpage</h2>

        <p>
                your webpage will be unique right? like i stated before, the &lt;head &gt; &lt;/head &gt; section <br/>
                doesn't display anything on your website, it's used and and identificator for your webpage, it's where<br/>
                you put the title, the encoding and few other things you can include in it.<br/>
                <ul>
                    <li>&lt;title&gt;&lt;/title&gt; : and is used to add a title to your webpage</li>
                    <li>&lt;meta charset='utf-8' &gt; : it's the encoding that's used on your page</li>
                    <li>&lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt; : and it's used<br/>
                        to fit your website on the screen of the device that displays it. Phone/Screen/Pad
                    </li>
                </ul>

                Example: <br/>

                <div class='codeArea'>

                    <span class='tag'>&lt;head&gt; </span> <br/>

                        <span class='tag'>&lt;title&gt;</span>This is the title<span class='tag'>&lt;/title&gt;</span><br/>
                        <span class='tag'>&lt;meta charset='utf-8'&gt;</span><br/>
                        <span class='tag'>&lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;</span><br/>

                    <span class='tag'>&lt;/head&gt;<br/></span>

                </div>

                <h2 class='Act'>Referencials</h2>

                <p>
                                    <span id='References'></span>
                                    the thing i need to tell you about links,and images  is that they are a little hard to understand <br/>
                                    the first time you deal with them, but it's like i said, nothing is as hard as your <br/>
                                    mindset, so with a little focus, you'll understand them once and for all .<br/>
                                    
                                    <strong id="Warning">Problem :</strong> your website will contain a lot of files, everyone inside <br/>
                                    a specefic folder. both the <strong>reference of the link</strong> and <strong>the source of the image</strong> need to be written<br/>
                                    in a way that depends of the location of the file you're creating a reference to . otherwise your link is<br/>
                                    gonna lead nowhere and your images isn't going to appear.<br/>
                                    there a three senarios you'll face when creating references and sources:
                                    <ul>
                                        <li>The file you'll refer to is in the same folder as the current folder</li>
                                        <li>The file you'll refer to is in in an other folder within the same <br/>
                                            hierachy of your current file</li> 
                                        <li>The file you'll refer to is in a folder, and your<br/>
                                            current file is an different folder</li>    
                                    </ul>
                                    so the faster we begin the sooner we get this dealt with, we're starting with your link

                                    <ul> 
                                    <li>

                                            link to a file that is in the same folder:<br/>
                                            <strong>&lt;a href='./filename.extention'&gt; </strong>: the <strong>'./' </strong><br/>
                                            is sort of an order you give to the link :to stay in the same folder and look for <br/>
                                            a file with this name (what's after the <strong>'./'</strong>)<br/>
                                            
                                        </li>
                                        <img src='../media/SameFile.png'/>
                                        <li>
                                            your current file(index.html) and and the folder(Garage) that contains the file(Car.html) you wanna <br/>
                                            refer to, are in the same place (folder)<br/>
                                            <strong>&lt;a href='./Garage/Car.html'&gt; </strong>: the <strong>'./Garage/Car.html' </strong><br/>
                                            is the order to give to your webpage : Go inside this folder (Garage), then look for <br/>
                                            this webPage(Car.html)
                                        </li>
                                        <img src='../media/Different.png'/>
                                        <li>
                                            the file you wanna refer to (Car.html) and the folder (Container) that contains your current <br/>
                                            webpage(index.html) are located in the same folder(Main Folder)<br/>
                                            <strong>&lt;a href='../Car.html'&gt; </strong>: the <strong>'../Car.html' </strong><br/>
                                            the <strong>'../"</strong> is an order you give to your webpage: back off with one folder then
                                            look for the file called that specefic name(Car.html)<br/>
                                            are 
                                        </li>
                                        <img src='../media/OutSideFolder.png'/>
                                        <li>
                                            your current webpage(idex.html) and the page you wanna refer to are in two <br/>
                                            different folders, located in the same main folder :<br/>
                                            <strong>&lt;a href='../Garage/Car.html'&gt; </strong>: the <strong>'../Garage/Car.html' </strong><br/>
                                            what we did here was giving an order to our webpage, to backoff one folder, then acces the folder<br/>
                                            named (Garage),then look for the file with this name(Car.html)
                                        </li>
                                        <img src='../media/folders.png'/>
                                    </ul>
                                    This video will help you practice links, images, video and audio inside your webpage <br/> 
                                </p>
                            </p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/lvoSpD-OU1M"
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                            
                            <h2>Add attributes to your tags</h2>
                            <p>
                                <strong>Attributes</strong> are keywords that are written inside <strong>HTML opening tags</strong> to modify <br/>
                                the behavior of your elements .<br/>
                                here's a list of the attributes we're gonna be using in this course :
                                <ul>

                                    <li><strong>title :</strong> is used to display a little message when the mouse is over the element</li>
                                    <li><strong>id :</strong> is used to identify the element and being 
                                        able to modify it outside the tag</li>
                                    <li><strong>class :</strong> is used to identify the element and being
                                        able to modify it outside the tag</li>
                                    <li><strong>style :</strong> is used to modify the style of the element
                                        inside the tag</li>
                                    <li><strong>disabled:</strong> is mostly used to modify input elements 
                                        such as buttons and textareas</li>
                                    
                                </ul>
                                <strong>Example :</strong><br/><br/><br/>
                                
                                <div class='codeArea'>
                            
                                    <span class='tag'>&lt;p title='this is a paragraph'&gt;</span>Paragraph <span class='tag'>&lt;/p&gt;</span> <br/>
                                    <span class='tag'>&lt;p class='P'&gt;</span>Paragraph <span class='tag'>&lt;/p&gt;</span> <br/>
                                    <span class='tag'>&lt;p id='Paragraph'&gt;</span>Paragraph <span class='tag'>&lt;/p&gt;</span> <br/>
                                    <span class='tag'>&lt;p style='color:blue'&gt;</span>Paragraph <span class='tag'>&lt;/p&gt;</span> <br/>

                                </div>
                        

                            <br/>

                                As you may notice, the <strong>Attribute</strong> is written inside the <strong>opening tag </strong>of an element.<br/>
                                i've used the title attribute because it's the best one that will make you notice<br/>
                                the effect it has on the element, i strongly advise you to write it in your code editor <br/>
                                to see the change it does .

                            </p>


                            <h1 class='Chapter'>CHAPTER 2 : Add style to your website</h1><br/>
                            <h2>Create a stylesheet link</h2>
                            <p>
                                so you have a website that contains lists, images , links and even paragraphs, but it's not that <br/>
                                good looking right?, wouldn't it be better if you add some colors? organize your text and make it<br/>
                                more adorable to the naked eye? this is exactly the role of <strong title='Casading style sheets'>CSS 3</strong> .<br/>
                                i strongly advise you to revise links before getting started, otherwise you'll have problems learning <br/>
                                this chapter <br/>
                                <br/>
                                There are three ways to add style to your page:<br/>
                                <ul>
                                    <li>
                                        <strong>&lt;style&gt; &lt;/style&gt;</strong> : this is a tag that you can write in the head of your document then add the style
                                                <br/> you want to your page:<br/>
                                    <div class='codeArea'>
                                        <span class='tag'>&lt;!DOCTYPE&gt;</span><br/>
                                        <span class='tag'>&lt;html&gt;</span><br/>
                                        <span class='tag'>&lt;head&gt;</span><br/>
                                        &nbsp;&nbsp;&nbsp;<span class='tag'>&lt;style&gt;</span><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; style is applied here<br/>
                                        &nbsp;&nbsp;&nbsp;<span class='tag'>&lt;/style&gt;</span><br/>
                                        <span class='tag'>&lt;/head&gt;</span><br/>
                                        <span class='tag'>&lt;body&gt;</span><br/>
                                        <span class='tag'>&lt;/body&gt;</span><br/>
                                        <span class='tag'>&lt;/html&gt;</span><br/>
                                    </div>
                                    </li>

                                    <li> 
                                        Modify the style using  the <strong>style = ' '</strong> Attribute inside the opening tag you wanna modify <br/>
                                        <div class='codeArea'>
                                        <span class='tag'>&lt;p style='color:blue; border:solid black;'&gt;</span><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hey this is some text<br/>
                                        <span class='tag'>&lt;/p&gt;</span><br/>

                                        </div>
                                    </li>
                                    <li>
                                        <strong>&lt;link rel='stylesheet' href='style.css'/&gt;</strong> : these are called selectors, they are the best way to modify the style<br/>
                                        of your webpage as you create an independant file and the only thing you add in your html file is a link to that <br/>
                                        specefic css File, note that this is the way i'll be creating stylesheets in my websites from now on<br/>
                                        <div class='codeArea'>
                                        <span class='tag'>&lt;!DOCTYPE&gt;</span><br/>
                                        <span class='tag'>&lt;html&gt;</span><br/>
                                        <span class='tag'>&lt;head&gt;</span><br/>
                                        &nbsp;&nbsp;&nbsp;<span class='tag'>&lt;link rel='stylesheet' href='style.css'/&gt;</span><br/>
                                        <span class='tag'>&lt;/head&gt;</span><br/>
                                        <span class='tag'>&lt;body&gt;</span><br/>
                                        <span class='tag'>&lt;/body&gt;</span><br/>
                                        <span class='tag'>&lt;/html&gt;</span><br/>
                                        </div><br/><br/>
                                        
                                        Down here is the linked file Example<br/><br/>

                                        <div class='codeArea'>

                                            <span class='selector'>
                                                p
                                            </span>
                                            <br/>
                                            {<br/>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color : black ;<br/>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border : solid black ;<br/>
                                            }<br/>
                                        
                                        </div>
                                    </li>
                                </ul>


                                <h2>
                                    Modify and customize the apparence of your text
                                </h2>
                                This is a list of the things you can modify for your text :
                                <ul>
                                    <li> 
                                        <strong title='text size'>font-size </strong>:this actually allows you to modify the size of your text, just add it in<br/>
                                        the selector of the tag you wanna modify. can enter the value either by <strong title='pixels'> px </strong> or <strong title='empehremal unit'>em</strong>
                                    </li>
                                    <li>
                                        <strong>font-family</strong>: this is the attribute that allows you to change the family of your font(way it's written)<br/>
                                        and you have a variety of choices that you can have as a parameter for your attribute :<br/>
                                        <ul>
                                            <li>Arial</li>
                                            <li>Arial Black</li>
                                            <li>Comic sans ms</li>
                                            <li>Times new roman</li>
                                            <li>Courrier new</li>
                                            <li>Verdanna</li>
                                            <li>Georgia</li>
                                        </ul> 
                                    </li>
                                    <li>
                                        <strong>color </strong>:wich actually allows you to change the color of the text or the <strong>Font</strong><br/>
                                        just add it to the tag you wanna change and it will happen<br/>
                                    </li>
                                    <li><strong>background-color</strong>: every tag has an invisible background, by adding this attribute to your selectors<br/>
                                        you modify that background's color.
                                
                                    </li>
                                </ul>
                                    <h2>Add borders to your elements </h2>
                                <ul>
                                    <li>
                                        <strong>border </strong>: this attribute allows you to add a border to your tag once you add it to it's selector<br/>
                                        it has three parameters <br/>
                                        <ul>
                                                <li>
                                                    <strong>color </strong> : wich changes the color of the border
                                                </li>
                                                <li>
                                                    <strong>size </strong> : wich changes the size of the border(thickness)
                                                </li>
                                                <li>
                                                    <strong>type </strong> : wich changes the type of the border and you also have a variety of choices in<br/>
                                                    this parameter : 
                                                    <ol>
                                                        <li id="none">none</li>
                                                        <li id="dotted">dotted</li>
                                                        <li id="dashed">dashed</li>
                                                        <li id='solid'>solid</li>
                                                        <li id='double'>double</li>
                                                        <li id='groove'>groove</li>
                                                        <li id='ridge'>ridge</li>
                                                        <li id='inset'>inset</li>
                                                        <li id='outset'>outset</li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <strong>border-radius</strong> : this actually edits the the sharpness of the corners of your border<br/>
                                                    and makes them more or less round, just like the font-size, the parameters can be entered in <strong title='pixels'> px</strong>
                                                    <br/>
                                                    or <strong title='empheremal unit '>em</strong> and it can be also entered in <strong title='percentage'>%</strong><br/>
                                                    <strong>Example :</strong><br/>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-radius : 50%;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-radius : 50px;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border-radius : 5em ; 
                                                    
                                                </li>
                                                <li>
                                                    You can also change the radius of one specefic border :<br/>
                                                    <ul>
                                                        <li>
                                                            border-top-right-radius:20px;
                                                        </li>
                                                        <li> 
                                                            border-top-left-radius:30px;
                                                        </li>    
                                                        <li>
                                                            border-bottom-right-radius:10px;
                                                        </li>
                                                        <li>  
                                                            border-bottom-left-radius:15px;
                                                        </li>
                                            <div style='border:solid black;border-radius:50px; padding:50px;margin:10px; width:500px'>div with a 50px border-radius</div>
                                                        <br/>
                                                        <br/>
                                                        <br/>
                                                

                
                                                    </ul>
                                                </li>
                                        </ul>
                                </p>
                                <h2>FlexBox</h2>
                                <span id='Warning'>Problem :</span> i've written everything inside the containers, why is everything still simple<br/>
                                            the answer is pretty simple, it's because you didn't choose how you wanna organize your elements, and like i said<br/>
                                            putting your elements in the<strong>&lt;header&gt; &lt;/header&gt;</strong>, it doesn't necessarly mean that they<br/>
                                            will be located in the head of the page , same goes to <strong>&lt;footer&gt;</strong> and the other tags, they simply play<br/>
                                            the role of a simple<strong>&lt;div&gt;</strong> tag, but they are preferablly better because <br/>
                                            <ul>
                                                <li>
                                                    They will make your code easier to read if you wanna use it later or<br/>
                                                    
                                                </li>
                                                <li>
                                                    if you're working with your partners in your billion dollar enterprise<br/>
                                                    right?
                                                </li>
                                            </ul>
                                            <br/>
                                            <span id='Elayout'></span>
                                            Now don't worry, using <strong>&lt;div&gt;</strong> is unevitable,like <strong>Thanos</strong>
                                            <br/>
                                            <iframe src="https://giphy.com/embed/ie76dJeem4xBDcf83e" width="560" height="315" frameBorder="0" >
                                            </iframe>
                                            <br/>
                                            <br/>
                                            <br/>

                                            <strong>FlexBox</strong> is relatively a recent CSS feature that allows you to write less code to organize your elemets<br/>
                                            but what is this <strong>FlexBox</strong> ???, it's simply a bunch of selectors that you add to the<br/>
                                            container of your elements. to correctly demonstrate the <strong>Correctly</strong> i will create a<br/>
                                            video specefically for this subject, than i'll create a list of parameters for each selector that <br/>
                                            you can use as a reminder later .<br/> 
                                            as an extra thing , you can get to choose your own colors from <a href='https://www.webfx.com/web-design/color-picker/'
                                            target='blank'>this website</a> 
                                            <br/>
                                            <br/>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/sKcflySjl0o" 
                                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen></iframe>
                                            <br/>
                                            <br/>


                                            <h2>Add Forms to your website</h2>
                                            Your website is good for now when it comes to displaying content, but in order<br/>
                                            to interact with the user and do some tasks such taking information and processing<br/> 
                                            it, you need to add a <strong>Form</strong> in your website ,now just to break it<br/>
                                            down for you, you'll only learn how to display a <strong>Form</strong> in this course<br/>
                                            but don't worry about processing data and making<strong title='interactive'> it </strong> interactive,<br/>
                                            you'll need to follow my <a href='#'>PHP</a> course and<a href='#'>MySQL</a> , and for now,<br/>
                                            let's get started. <br/> 
                                            <br/>
                                            unlike other HTMLL5 concepts,<strong>Forms</strong> are easy to master, you just gotta remember <br/>
                                            the names of the <strong>tags</strong> im about to be showing you and thier attributes<br/>


                                            <ul>
                                                <li>
                                                    
                                                    <strong>&lt;form&gt; &lt;/form&gt;</strong>:this is actually the element that <strong>Contains</strong><br/>
                                                    all the other elements,it has two <strong>special attributes</strong>attributes that come only with it<br/>
                                                    <ul>
                                                        <li>

                                                            <strong>action=''</strong>:  this attribute decides the destination where you'll get after<br/>

                                                            filling the form , so let's just leave it for now.
                                                        </li>
                                                        <li><strong>method =''</strong> :and this attribute decides the method in wich the data of the user<br/>
                                                        will be processed, and saved(in a database), so let's just leave it like this for now, 
                                                        </li>
                                                    </ul>
                                                    
                                                </li>
                                                the elements im about to share with you don't really have to be written inside the <strong>&lt;form&gt;&lt;/form&gt;</strong><br/>
                                                but in order to make then interactive, you either have to write them inside a form or use <strong>Javascript</strong> wich is<br/>
                                                a programming language that will allow you to dynamize your website and make it more interactive
                                                <li>   
                                                    <strong>&lt;input type='text'/&gt;</strong> : this tag allows you to display an element called<br/>
                                                    a textbox, it actually displays an textarea where you can write whatever it is you want<br/>
                                                    as long as you want it to be considered text<br/>
                                                    Try using it here:<br/>
                                                    <input type='text' placeholder='type Text Here'/><br/>
                                                    This is the list of the attributes that come with the <strong>Text Input</strong><br/>
                                                    


                                                </li>
                                                <li>
                                                    <strong>&lt;input type='email'/&gt; </strong>: this tag is actually the one you wanna add to your<br/>
                                                    form if you wanna ask the user to set his email, the difference between an email input and a normal<br/>
                                                    text input is that the email input will display a message if the <strong>@</strong> character isn't<br/>
                                                    detected by the webpage in your email .<br/> 
                                                    Try using it here <br/>
                                                    <form action='#Email' id='Email'>
                                                    <input type='email'/>
                                                    <input type='submit' value='confirm' href='../index.html'/>
                                                    </form>
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='number'&gt;</strong>: and this tag only allows you to enter numbers <br/>
                                                    it's mostly used for to contain the user's age <br/>
                                                    Try using it here<br/>
                                                    <input type='number'/>
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='radio'/&gt;</strong> : this input box is usually used to indicate the gender<br/>
                                                    in most of the forms or the country, the essential is that it gives you multiple  choices<br/>
                                                    <label for='radio'>You can try using it here</label>
                                                    <form>
                                                    Option 1&nbsp;<input name ='None'type='radio'/><br/>
                                                    Option 2&nbsp;<input name='None' type='radio'/><br/>
                                                    </form>
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='password'&gt;</strong> : this input type is used to demand a password<br/>
                                                    from the user, and it's not diplayed it replaces the characters you enter with letters<br/>
                                                    you can try using it here :<br/>
                                                    <input type='password'/>
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='checkbox' /&gt;</strong> : and as you may already know, it's a check box <br/>
                                                    ya know ;) that square with a little Nike symbol on it <br/>
                                                    Try using it here<br/>
                                                    Just Do It <input type='checkbox' style='height:20px ; width : 20px;' />
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='date'/&gt;</strong> : this input demands the user to input of a date<br/>
                                                    and just like all the others, you can try using it here<br/>
                                                    <input type='date'/>

                                                </li>
                                                <li>
                                                    <strong>&lt;input type='search' /&gt;</strong> : you've probably used this before and it actually<br/>
                                                    searches the input you put it in, it looks like a text box and it's useless at the moment,but<br/>
                                                    i'll create a chapter just for the search bar so that it becomes interactive in my <strong>JavaScript</strong>
                                                    Course<br/>
                                                    it looks just like this <br/>
                                                    <input type='search'/>
                                                </li>
                                                <li>

                                                    <strong>&lt;input type='url'/&gt;</strong> : so in this element allows you to type a url in it
                                                    <form id='url' action='#url'>
                                                    <input type='url'/><br/>
                                                    <input type='submit'/>
                                                    </form>
                                                    

                                                </li>
                                                <li>
                                                    <strong>&lt;input type='file'&gt;</strong>: this tag will allow you to upload a file into the <br/>
                                                    website server :<br/>
                                                    you can try using it here : <br/>
                                                    <input type='file'/>
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='reset'&gt;</strong>: this tag will allow you to reset the whole form<br/>
                                                    wich means that if you filled some boxes they will become empty once you click on the reset button<br/>
                                                    <form>
                                                        <label for='name'>Name :</label><br/>

                                                        <input type='text' id='name'/><br/><br/>

                                                        <label for='lastname'>Last Name :</label><br/>

                                                        <input type='text' id='lastname'/><br/><br/>

                                                        <label for='number'>Phone number</label><br/>

                                                        <input type='number' id='phonenumber'/><br/><br/>

                                                        <input type='reset' value='reset'/>
                                                        

                                                    </form>
                                                </li>
                                                <li>
                                                    <strong>&lt;input type='range'/&gt;</strong>:this creates a slider from wich you can slide back and forth to <br/>
                                                    choose a certain exact value <br/>
                                                    Try using it down here <br/>
                                                    <input type='range' min='0' max='10'/>
                                                </li>
                                                This list contains attributes that will help you to make your form more interactive<br/>

                                                <table>
                                                    <tr>
                                                        <th>Attribute</th>
                                                        <th>Definition</th>
                                                    <th>Common input types it's used for</th>
                                                    </tr>
                                                    <tr>
                                                        <td>placeholder</td>
                                                        <td>writes in the box an example or a description of<br/>
                                                            what you can write in it</td>
                                                        <td>text , password ,number ,tel</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            maxlength,minlength
                                                        </td>
                                                        <td>
                                                            defines the maximum and minum length your input <br/>
                                                            box can have. 
                                                        </td>    
                                                        <td>
                                                            text, tel, password
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>max , min</td>
                                                        <td>defines the maximum and the minimum value you<br/>
                                                            can set and is used when the input is and integer <br/>
                                                        </td>
                                                        <td>
                                                            number,range
                                                        </td>
                                                    </tr>


                                                </table>
                                                <br/>
                                                This is an example of a form that you can try to create yourself.<br/>
                                                <br/>
                                                <img src='../media/SnipForm.png'/>
                                                </ul>

                                                <br/><br/><br/>

                                                <h2>Practice what you've learned!!</h2>
                                            This is it, you've learned about everything in this course<br/>
                                            Now comes time to practice what you've learned<br/>
                                            and in order to master the concepts i've just shown you, you have to be able to <br/>
                                            do this <strong>Exercice</strong><br/><br/><br/>

                                            <strong>Required Work :</strong>
                                            so you can do additional stuff, it's your website afterall, it has to be unique <br/>
                                            but the least you can do is this :
                                            <ul>
                                                <li>Create displayable content in your website such as</li>
                                                <ul>
                                                    <li>Paragraphs</li>
                                                    <li>Titles</li>
                                                    <li>Lists</li>
                                                    <li>Links</li>
                                                </ul>
                                                <li>
                                                    Create a page that contains a form 
                                                </li>
                                            </ul>
                                            here's a video that will help you out, but you gotta try do it yourself before giving up<br/>
                                            and looking for the solution <br/>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Nx5x0WaKd7c" 
                                            frameborder="0" allow="accelerometer; autoplay; 
                                            encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen></iframe><br/><br/>


                                            <?php

                                                if(isset($_SESSION['UserId']))
                                                    if(isset($_GET['Started']) && $_GET['Started']==1 )
                                                    {
                                                        echo "<a href='FinishHtmlCSS.php'><button class='EndButton'>Click here to finish Course</button></a>";
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
                
        </p>
        
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php 

    $conn = null;

?>