<?php

    session_start();


    $servername='localhost';
    $database='Courses';
    $username='username';
    $password='password';

    $conn = null;

    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Connected";
    }
    catch(PDOException $e)
    {   
        echo "Connection failure with error code " .$e;
    }

    echo $_FILES['ProfileUpload']['name'];

    if(isset($_POST['Submit']))
    {
        echo "<br/>True";
        $target='../uploads/'.basename($_FILES['ProfileUpload']['name']);
       
        $sql = $conn -> prepare ("INSERT INTO ProfileImage (MemberID,Src) VALUES (?,?)");
       
        

        if(move_uploaded_file($_FILES['ProfileUpload']['tmp_name'],$target))
        {   
           
            echo "Moved as fuck";
            header("Location:./Member.php");
            $sql -> execute(array($_SESSION['UserId'],$_FILES['ProfileUpload']['name']));
        }
        else
        {
            echo"Upload Failure try fucking again later";
            header("Location:./Member.php?Upload=ldsjfsmakjshdfa");
        }
    }
    else
    {
        header("Location:./Member.php?Upload=ldsjfsmakjshdfa");
    }

?>