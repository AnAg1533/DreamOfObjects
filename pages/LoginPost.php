<?php

    $server = 'localhost';
    $database = 'Courses';
    $username = 'username';
    $password = 'password';


    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected <br/>" ;
    }
    catch(PDOException $e)
    {
        echo "Connection failure with error code " .$e;
    }



    if(isset($_POST['UserName']) && isset($_POST['Pass']))
    {
        $Password = $_POST['Pass'];
        $UserName = $_POST['UserName'];
        
        
        echo $Password .'<br/>';
        echo $UserName .'<br/>';

        $isCorrect = null;


        $sql = $conn -> prepare("SELECT * FROM Member WHERE UserName=?");

        $sql -> execute(array($UserName));

        $data = $sql->fetch();
        
        $isCorrect = password_verify($Password,$data['Password']);
        if($isCorrect)
        {
            echo "It is correct";
            session_start();

            $_SESSION['UserName']=$data['UserName'];
            $_SESSION['UserId']=$data['ID'];
            header("Location:./Member.php");
        }
        else
        {
            header("Location:../index.php?hkljashd=243#FormSection");
        }



    }
    else
    {
        header("Location:../index.php?hkljashd=243#FormSection");
    }


    $conn = null;






?>