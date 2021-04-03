<?php



    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];


    if(isset($UserName) && isset($Password))
    {   

        echo $UserName ;
        echo "<br/>" . $Password;
        
        if($UserName=='Admin121' && $Password == '#WEBMAS%TER15')
        {
            session_start();
            $_SESSION['UserName']='Admin1ewq';

            header("Location:BlogPoster.php");
        }
        else
        {
            echo "Love doesn't exist";
        }
    }





?>
