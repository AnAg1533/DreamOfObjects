<?php



    session_start();
    if(isset($_SESSION['UserName']) && $_SESSION['UserName']=='Admin1ewq')
    {

    }
    else
    {
        session_destroy();
        $_SESSION=array();
        header("Location:../index.php");
    }








?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Johnny Boi</title>
            <link rel="icon" href="../media/Icon.png">

    <style>
     
    </style>
    </head>

    <body>

            <form  method="POST" action='BlogPost.php' enctype="multipart/form-data">
            
            <div>

                <p>Title</p>
                <br/>
                <input type='Text' placeholder='Title' name='Title'/>
                <br/>
            </div>
            <div>

                <p>Bio</p>
                <br/>
                <textarea style='height:300px; width:300px' type='Text' placeholder='Bio' name='Bio'></textarea>
                <br/>
            </div>
            <div>

                <p>Paragraph1</p>
                <br/>
                <textarea style='height:300px; width:300px' type='Text' placeholder='Paragraph1' name='Paragraph1'></textarea>
                <br/>
            </div>
            <div>

                <p>Paragraph2</p>
                <br/>
                <textarea style='height:300px; width:300px' type='Text' placeholder='Paragraph2' name='Paragraph2'></textarea>
                <br/>
            </div>

            <div>

                <p>Header Picture</p>
                <br/>
                <input type='file' name='HeaderPic2'/>
                <br/>
            </div>

            <div>

                <p>Image 1</p>
                <br/>
                <input type='file' name='Image1'/>
                <br/>
            </div>
            <div>

                <p>Image 2</p>
                <br/>
                <input type='file' name='Image2'/>
                <br/>
            </div>

            <div>

                <p>Author</p>
                <br/>
                <input type='Text' placeholder='Auteur' name='Auteur'/>
                <br/>
            </div>
            


            <br/><br/><br/>
            <input type='submit' value='submit'/>
            </form>


       
    </body>
</html>